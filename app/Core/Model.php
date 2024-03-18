<?php
namespace App\Core;
abstract class Model extends Database
{
    public static $db;

    //    tạo các hằng số -> xác định các qui tắc xác thực.
    public const RULE_REQUIRED = 'required';
    public const RULE_EMAIL = 'email';
    public const RULE_MIN = 'min';
    public const RULE_MAX = 'max';
    public const RULE_MATCH = 'match';


    public function __construct()
    {
        self::$db = new Database();
    }

    abstract function tableFill();
    abstract function fieldFill();
    abstract function primaryKey();


    public function all(){
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();
        if(empty($fieldSelect)){
            $fieldSelect = '*';
        }
        $sql = "SELECT $fieldSelect FROM $tableName";
        $query =  self::$db->query($sql);
        if(!empty($query)){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;

    }

    public function find($id){
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();
        $primaryKey = $this->primaryKey();
        if(empty($fieldSelect)){
            $fieldSelect = '*';
        }
        $sql = "SELECT $fieldSelect FROM $tableName WHERE $primaryKey = $id";
        $query =  self::$db->query($sql);
        if(!empty($query)){
            return $query->fetch(PDO::FETCH_ASSOC);
        }
        return false;
    }
}