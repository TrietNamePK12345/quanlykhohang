<?php

namespace App\Models;
use App\Core\Model;
class ImportModel extends Model
{
    public function tableFill()
    {
        return 'import_goods';
    }

    public function fieldFill()
    {
        return '*';
    }

    public function primaryKey()
    {
        return 'id';
    }

    public static function listImport()
    {
        $data = self::$db
            ->select("ip.*,(ip.qty_buy * ip.import_price) as totalImport, s.name as name_supplier, w.name as name_warehouse, u.name as creator")
            ->table('import_goods as ip')
            ->join('suppliers as s', 'ip.supplier_id = s.supplier_id')
            ->join('warehouses as w', 'ip.warehouse_id = w.warehouse_id')
            ->join('users as u', 'ip.creator_id = u.user_id')
            ->join('products as p', 'ip.product_id = p.product_id')
            ->groupBy('ip.import_id')
            ->get();
        return $data;
    }

    public static function detailImport($id)
    {
        $data = self::$db
                ->select('ip.*,(ip.qty_buy * ip.import_price) as totalImport, s.name as name_supplier, w.name as name_warehouse, u.name as creator, p.image as imagePro, p.name as name_product, p.product_id as productId')
            ->table('import_goods as ip')
            ->join('suppliers as s', 'ip.supplier_id = s.supplier_id')
            ->join('warehouses as w', 'ip.warehouse_id = w.warehouse_id')
            ->join('users as u', 'ip.creator_id = u.user_id')
            ->join('products as p', 'ip.product_id = p.product_id')
            ->where('ip.import_id' ,'=', $id)
            ->groupBy('ip.import_id')
            ->first();
        return $data;
    }

    static public function findProductById($id)
    {
        $result = self::$db
            ->select("*")
            ->table("products")
            ->where('product_id', '=' , $id)
            ->first();

        return $result;
    }

    static public function countImport()
    {
        $data = self::$db
            ->select("count(import_id) as countImport")
            ->table("import_goods")
            ->get();
        return $data;
    }


    public static function insertImport($data, $id, $qty)
    {
        self::$db->table('import_goods')->insert($data);
        self::$db->table('products')->where('product_id','=', $id)->update($qty);
    }


}