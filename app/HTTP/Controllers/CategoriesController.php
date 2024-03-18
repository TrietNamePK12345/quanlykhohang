<?php

namespace App\HTTP\Controllers;
use App\Core\Request;
use App\Models\CategoriesModel;
use App\Core\Controller;
use App\Core\Response;
class CategoriesController extends Controller
{
    public $data = [], $category;

    public function __construct()
    {
        $this->category = new CategoriesModel();
    }



    public function addCate()
    {
        $data = Request::getFields();

        $insertData = array(
            'category_id' => $data['category_id'],
            'name' => $data['name'],
        );

        $result = $this->category->addCate($insertData);

        if(!$result) {
            Response::redirect('them-san-pham');
        }

    }
}