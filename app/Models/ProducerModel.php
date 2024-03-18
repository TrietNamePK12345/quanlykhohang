<?php

namespace App\Models;
use App\Core\Model;

class ProducerModel extends Model
{
    public function tableFill()
    {
        return 'producers';
    }

    public function fieldFill()
    {
        return '*';
    }

    public function primaryKey()
    {
        return 'id';
    }

    public static function listProducer()
    {
        $data = self::$db
            ->select("*")
            ->table('producers')
            ->get();
        return $data;
    }

    public static function addProducer($data)
    {
        self::$db->table('producers')->insert($data);
    }

}