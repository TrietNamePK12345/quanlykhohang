<?php

namespace App\Models;

use App\Core\Model;

class UnitModel extends Model
{
    public function tableFill()
    {
        return 'units';
    }

    public function fieldFill()
    {
        return '*';
    }

    public function primaryKey()
    {
        return 'id';
    }

    public static function listUnit()
    {
        $data = self::$db
            ->select("*")
            ->table('units')
            ->get();
        return $data;
    }

    public static function addUnit($data)
    {
        self::$db->table('units')->insert($data);
    }
}