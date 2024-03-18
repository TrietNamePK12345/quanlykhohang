<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Session;
use App\Models\CategoriesModel;
use App\Models\ImportModel;
use App\Models\ProducerModel;
use App\Models\UnitModel;
use App\Models\ProductModel;
use App\Models\UsersModel;
use App\Models\ClientModel;


class AdminController extends Controller
{
    public $data=[], $categories, $producer, $units, $products, $users, $imports;

    public function __construct()
    {
        $this->users = new UsersModel();
        $this->categories = new CategoriesModel();
        $this->producer = new ProducerModel();
        $this->units = new UnitModel();
        $this->products = new ProductModel();
        $this->imports = new ImportModel();
    }

    public function dashboard()
    {
        if (Request::isGet()) {
            $this->data['countPro'] = $this->products::countPro();
            $this->data['countImport'] = $this->imports::countImport();
            $this->data['stokingPro'] = $this->products::Stoking();
            $this->data['outStoking'] = $this->products::outStoking();
            $this->data['listProduct'] = $this->products::listProduct();
            Controller::setLayout('admin_layout');
            Controller::render('admin/dashboard/dashboard',  $this->data);
        } else {
            Controller::render('errors/_404');
        }
    }
    public function list_product()
    {
        if (Request::isGet()) {
            $listProduct = $this->products::listProduct();
            $listCate = $this->categories::listCate();
            $listProducer = $this->producer->listProducer();
            $listUnit = $this->units->listUnit();
            $this->data['listCate'] = $listCate;
            $this->data['listProducer'] = $listProducer;
            $this->data['listUnit'] = $listUnit;
            $this->data['listProduct'] = $listProduct;
            Controller::setLayout('admin_layout');
            Controller::render('admin/product/list_product', $this->data);
        }  else {
            Controller::render('errors/_404');
        }
    }

//    Giao diện thêm sản phẩm
    public function add_product()
    {
        if (Request::isGet()) {
            $listCate = $this->categories->listCate();
            $listProducer = $this->producer->listProducer();
            $listUnit = $this->units->listUnit();
            $this->data['listCate'] = $listCate;
            $this->data['listProducer'] = $listProducer;
            $this->data['listUnit'] = $listUnit;

            Controller::setLayout('admin_layout');
            Controller::render('admin/product/add_product', $this->data);

        } else {
            Controller::render('errors/_404');
        }
    }

//    Thêm sản phẩm
    public function insertProduct()
    {
        $data = Request::getFields();

        // Xử lý hình ảnh
        $imagePath = '';
        if(isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
            $imageDir = 'uploads/products/'; // Đường dẫn tới thư mục lưu trữ hình ảnh
            $imageName = $_FILES['image']['name'];
            $imagePath = $imageDir . $imageName;
            move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
        }


        $insertData = array(
            'name' => $data['name_product'],
            'description' => $data['description'],
            'category_id' => $data['category_id'],
            'unit_id' => $data['unit_id'],
            'producer_id' => $data['producer_id'],
            'selling_price' => $data['selling_price'],
            'orginPrice' => $data['orginPrice'],
            'status' => $data['status'],
            'image' => $imagePath
        );

        $result = $this->products->addProduct($insertData);

        if(!$result) {

            Response::redirect('danh-sach-san-pham');

        }
    }

    public function deletePro()
    {
        $id = Request::getFields();
        $result = $this->products->deletePro($id['id']);

        if(!$result) {
            Response::redirect('danh-sach-san-pham');
        }
    }

    public function updatePro()
    {
        $data = Request::getFields();
        $id = $data['product_id'];

        $updateData = array(
            'name' => $data['name'],
            'category_id' => $data['category_id'],
            'producer_id' => $data['producer_id'],
            'unit_id' => $data['unit_id'],
            'description' => $data['description'],
            'orginPrice' => $data['orginPrice'],
            'selling_price' => $data['selling_price'],
            'status' => $data['status']
        );

        if(isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
            $imageDir = 'uploads/products/';
            $imageName = $_FILES['image']['name'];
            $imagePath = $imageDir . $imageName;
            move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
            $updateData['image'] = $imagePath;
        }

        $result = $this->products::updatePro($updateData, $id);

        if (!$result) {

            Response::redirect('danh-sach-san-pham');
        }
    }



}