<?php

namespace App\Models;

use App\Core\Model;

class ClientModel extends Model
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

    public static function getList()
    {

        $data = self::$db->select("*")
            ->table('users')
            ->get();

        return $data;
    }
}
