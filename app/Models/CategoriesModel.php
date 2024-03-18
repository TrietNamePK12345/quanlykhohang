<?php

namespace App\Models;

use App\Core\Model;

class CategoriesModel extends Model
{
    public function tableFill()
    {
        return 'categories';
    }

    public function fieldFill()
    {
        return '*';
    }

    public function primaryKey()
    {
        return 'id';
    }

    public static function listCate()
    {
        $data = self::$db
            ->select("*")
            ->table('categories')
            ->get();
        return $data;
    }

    public static function addCate($data)
    {
        self::$db->table('categories')->insert($data);
    }

}