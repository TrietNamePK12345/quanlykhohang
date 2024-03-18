<?php

namespace App\Core;

class Request
{
    private static  $__rules = [], $__messages = [], $errors, $db;

    public function __construct()
    {
        self::$db = new Database();
    }

    public static function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public static function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public static function isGet()
    {
        return self::getMethod() === 'get';
    }

    public static function isPost()
    {
        return self::getMethod() === 'post';
    }

    public static function getFields()
    {
        $dataFields = [];  // Khởi tạo một mảng trống để lưu trữ dữ liệu đã được làm sạch.

        if (self::isGet()) {   // Kiểm tra nếu phương thức yêu cầu là GET.
            // Xử lý lấy dữ liệu với phương thức GET
            if (!empty($_GET)) {
                foreach ($_GET as $key => $value) {
                     // Kiểm tra nếu giá trị là một mảng.
                    if (is_array($value)) {
                          // Làm sạch giá trị mảng bằng cách sử dụng FILTER_SANITIZE_SPECIAL_CHARS. 
                        $dataFields[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                        echo $dataFields[$key];  // Dòng này xuất giá trị mảng đã được làm sạch. Có thể nên ghi log hoặc xử lý nó theo cách khác.
                    } else {
                         // Làm sạch giá trị không phải mảng bằng cách sử dụng FILTER_SANITIZE_SPECIAL_CHARS.
                        $dataFields[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }
        }

         // Kiểm tra nếu phương thức yêu cầu là POST.
        if (self::isPost()) {
            // Xử lý lấy dữ liệu với phương thức POST
            if (!empty($_POST)) 
            {
           
                foreach ($_POST as $key => $value) {
                    if (is_array($value)) {
                        $dataFields[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    } else {
                        $dataFields[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }

            // Xử lý lấy dữ liệu từ các file
            if (!empty($_FILES)) {
                foreach ($_FILES as $key => $file) {
                     // Lưu trữ dữ liệu tệp trong mảng $dataFields.
                    $dataFields[$key] = $file;
                }
            }
        }
        return $dataFields; // Trả về mảng chứa dữ liệu đã được làm sạch.
    }


    public static function rules($rules = [])
    {
        self::$__rules = $rules;
    }

    public static function message($message = [])
    {
        self::$__messages = $message;
    }

    public static function validate()
    {
        self::$__rules = array_filter(self::$__rules); // lọc mảng
        $checkValidate = true;

        if (!empty(self::$__rules)) {

            $dataField = self::getFields(); // lấy các giá trị đã nhập từ form

            foreach(self::$__rules as $fieldName => $ruleItem) {
               $ruleItemArr = explode('|', $ruleItem);

               foreach ($ruleItemArr as $rules) {

                   $ruleName = null;
                   $ruleValue = null;

                  $rulesArr = explode(':', $rules);
                  $ruleName = reset($rulesArr);  // lấy phần tử đầu tiên của mảng $ruleArr | lấy các giá trị chữ

                   if (count($rulesArr) > 1) { // kiểm tra mảng có nhiều hơn 1 phần tử hay không | nếu có => required:true
                       $ruleValue = end($rulesArr); // hàm end : lấy phần tử cuối cùng của mảng | kết quả : lấy các giá trị số
                   }

                   if ($ruleName == 'required') {
                       if(empty(trim($dataField[$fieldName]))) {
                           self::setErrors($fieldName, $ruleName);
                           $checkValidate = false; // rule này sẽ chạy nếu nó không có hoặc sai
                       }
                   }

                   if ($ruleName == 'min') {
                       if(strlen(trim($dataField[$fieldName])) < $ruleValue) {
                          self::setErrors($fieldName, $ruleName);
                          $checkValidate = false;
                       }
                   }

                   if ($ruleName == 'max') {
                       if(strlen(trim($dataField[$fieldName])) > $ruleValue) {
                           self::setErrors($fieldName, $ruleName);
                           $checkValidate = false;
                       }
                   }

                   if ($ruleName == 'email') {
                       if(!filter_var($dataField[$fieldName], FILTER_VALIDATE_EMAIL)) {
                           self::setErrors($fieldName, $ruleName);
                           $checkValidate = false;
                       }
                   }

                   if ($ruleName == 'unique') {
                       $tableName = null;
                       $fieldCheck = null;

                       if (!empty($rulesArr[1])) {
                          $tableName = $rulesArr[1]; // lấy user
                       }

                       if (!empty($rulesArr[2])) {
                           $fieldCheck = $rulesArr[2]; // lấy email
                       }

                       if (!empty($tableName) && !empty($fieldCheck)) { // check email tồn tại

                           if (count($rulesArr) == 3) {
                               $checkExist = self::$db->query("SELECT $fieldCheck FROM $tableName WHERE $fieldCheck = '$dataField[$fieldName]'")->rowCount();
                           } elseif (count($rulesArr) == 4) {

                               if (!empty($rulesArr[3]) && preg_match('~.+?\=.+?~is', $rulesArr[3])) {
                                   $conditionWhere = $rulesArr[3];
                                   $conditionWhere = str_replace('=' , '<>', $conditionWhere);
                                   $checkExist = self::$db->query("SELECT $fieldCheck FROM $tableName WHERE $fieldCheck = '$dataField[$fieldName]' AND $conditionWhere")->rowCount();

                               }

                           }

                            if (!empty($checkExist)) {
                                self::setErrors($fieldName, $ruleName);
                                $checkValidate = false;
                            }
                       }
                   }
                   // callback validate
//                   if (preg_match('~^callback_(.+)is~', $ruleName, $callbackArr)) {
//                   if (!empty($callbackArr[1])) {
//                       $callbackName = $callbackArr[1];
//                   }
//                       echo '<pre>';
//                       print_r($callbackArr);
//                       echo '</pre>';
//                   }

                   if ($ruleName == 'uniqued') { // kiểm tra kko tồn tại
                       $tableName = null;
                       $fieldCheck = null;

                       if (!empty($rulesArr[1])) {
                           $tableName = $rulesArr[1]; // lấy user
                       }

                       if (!empty($rulesArr[2])) {
                           $fieldCheck = $rulesArr[2]; // lấy email
                       }

                       if (!empty($tableName) && !empty($fieldCheck)) { // check email tồn tại

                           if (count($rulesArr) == 3) {
                               $checkExist = self::$db->query("SELECT $fieldCheck FROM $tableName WHERE $fieldCheck = '$dataField[$fieldName]'")->rowCount();

                               if (empty($checkExist)) {
                                   self::setErrors($fieldName, $ruleName);
                                   $checkValidate = false;
                               }
                           } elseif (count($rulesArr) == 4) {

                               if (!empty($rulesArr[3]) && preg_match('~.+?\=.+?~is', $rulesArr[3])) {
                                   $conditionWhere = $rulesArr[3];
                                   $conditionWhere = str_replace('=', '<>', $conditionWhere);
                                   $checkExist = self::$db->query("SELECT $fieldCheck FROM $tableName WHERE $fieldCheck = '$dataField[$fieldName]' AND $conditionWhere")->rowCount();

                                   if (empty($checkExist)) {
                                       self::setErrors($fieldName, $ruleName);
                                       $checkValidate = false;
                                   }
                               }

                           }
                       }
                   }
               }
            }
        }
        return $checkValidate; // không có rule chạy dòng này
    }



    public static function errors($fieldName = '')
    {
        if (!empty(self::$errors)) {
            if (empty($fieldName)) {
                $errors = [];
                foreach (self::$errors as $key => $value) {
                    $errorsArr[$key] = reset($value);
                }
                return $errorsArr;
            }
            return reset(self::$errors[$fieldName]);
        }
        return false;
    }

    public static function setErrors($fieldName, $ruleName)
    {
        self::$errors[$fieldName][$ruleName] = self::$__messages[$fieldName.'.'.$ruleName];
    }

}