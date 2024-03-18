<?php

namespace App\Models;
use App\Core\Model;
class ProductModel extends Model
{
    public function tableFill()
    {
        return 'products';
    }

    public function fieldFill()
    {
        return '*';
    }

    public function primaryKey()
    {
        return 'id';
    }

    public static function listProduct()
    {
        $data = self::$db
            ->select("p.*,c.name as name_category, sx.name as name_producer, u.name as name_unit")
            ->table('products as p')
            ->join('categories as c','p.category_id = c.category_id')
            ->join('producers as sx','p.producer_id = sx.producer_id')
            ->join('units as u','p.unit_id = u.unit_id')
            ->groupBy('p.product_id')
            ->get();
        return $data;
    }


    static public function countPro()
    {
        $data = self::$db
            ->select("count(product_id) as countPro")
            ->table("products")
            ->get();
        return $data;
    }

    // còn hàng
    static public function Stoking()
    {
        $data = self::$db
            ->select("count(product_id) as stoking")
            ->table("products")
            ->where('qty', '<=', '50')
            ->get();
        return $data;
    }

    // hết hàng
    static public function outStoking()
    {
        $data = self::$db
            ->select("count(product_id) as outStoking")
            ->table("products")
            ->where('qty', '=', '0')
            ->get();
        return $data;
    }


    public static function addProduct($data)
    {
        self::$db->table('products')->insert($data);
    }

    public static function deletePro($id)
    {
        self::$db->table('products')->where('product_id', '=', $id)->delete();
    }

    public static function updatePro($data, $id)
    {
        self::$db->table('products')->where('product_id', '=', $id)->update($data);
    }
}