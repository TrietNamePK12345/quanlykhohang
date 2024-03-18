<?php
namespace App\Core;

trait Validate
{
    public function validateRegister()
    {
//        $userID = 3;
        // set rules
        Request::rules(
            [
                'fullname' => 'required|min:5|max:30',
                'email' => 'required|email|min:6|unique:users:email', // có thể thêm ngoài sau khi sửa trong giao diện:user_id = '.$userID
                'password' => 'required|min:3', // min và max chỉ check độ dài
//                'age' => 'required|callback_check_age',
            ]
        );

        // set message
        Request::message([
            'fullname.required' => 'Họ và tên không được để trống',
            'fullname.min' => 'Họ và tên phải lớn hơn 5 ký tự',
            'fullname.max' => 'Họ và tên phải nhỏ hơn 30 ký tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải đúng định dạng',
            'email.min' => 'Email phải lớn hơn 6 ký tự',
            'email.unique' => 'Email đã tồn tại',
//            'age.required' => 'Tuổi không được để trống',
            'age.callback_check_age' => 'Tuổi không được nhỏ hơn 20',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải lớn hơn 3 ký tự',
        ]);

    }

    public function validateLogin()
    {
        Request::rules(
            [
                'email' => 'required|email',
                'password' => 'required|match',
            ]
        );

        Request::message(
            [
                'email.required' => 'Email không được để trống',
                'email.email' => 'Email phải đúng định dạng',
                'password.required' => 'Mật khẩu không được để trống',
                'password.match' => 'Mật khẩu của bạn chưa đúng!'
            ]
        );
    }

    public function validateForgot()
    {
        Request::rules(
            [
                'email' => 'required|email|uniqued:users:email',
            ]
        );

        Request::message([
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải đúng định dạng',
            'email.uniqued' => 'Email không tồn tại'
        ]);
    }




//    public function check_age($age)
//    {
//        if ($age > 20) return true;
//        return false;
//    }

}