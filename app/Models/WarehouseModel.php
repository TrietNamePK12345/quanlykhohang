<?php

namespace App\Models;

use App\Core\Model;

class WarehouseModel extends Model
{
    public function tableFill()
    {
        return 'warehouses';
    }

    public function fieldFill()
    {
        return '*';
    }

    public function primaryKey()
    {
        return 'id';
    }

    public static function listWarehouse()
    {
        $data = self::$db
            ->select("*")
            ->table('warehouses')
            ->get();
        return $data;
    }

    public static function addW($data)
    {
        self::$db->table('warehouses')->insert($data);
    }

    public static function deleteW($id)
    {
        self::$db->table('warehouses')->where('warehouse_id', '=', $id)->delete();
    }

    public static function updateW($data, $id)
    {
        self::$db->table('warehouses')->where('warehouse_id', '=', $id)->update($data);
    }


}