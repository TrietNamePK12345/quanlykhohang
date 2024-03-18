<?php

namespace App\Models;
use App\Core\Model;
use App\Core\Response;
use App\Core\Session;
use PHPMailer\PHPMailer\Exception;
class AuthModel extends Model
{
    public function tableFill()
    {
        return 'users';
    }

    public function fieldFill()
    {
        return '*';
    }

    public function primaryKey()
    {
        return 'id';
    }

    public static function addAuth($data)
    {
        self::$db->table('users')->insert($data);
    }

    static public function findUserByEmail($email)
    {
        $result = self::$db->table('users')->where('email', ' = ', $email)->first();
        return $result;
    }


    static  public function findUserByID($id)
    {
        $data = self::$db->select('password')
            ->table('users')
            ->where('id', '=', $id)
            ->first();

        return $data;
    }
}