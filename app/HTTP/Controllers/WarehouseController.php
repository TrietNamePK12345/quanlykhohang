<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Models\WarehouseModel;

class WarehouseController extends Controller
{

    public $data = [], $warehouses;
    public function __construct()
    {
        $this->warehouses = new WarehouseModel();
    }

    public function listWarehouse()
    {
        if (Request::isGet()) {
            $getList = $this->warehouses::listWarehouse();
            $this->data['listWarehouse'] = $getList;
            Controller::setLayout('admin_layout');
            Controller::render('admin/warehouses/listWarehouse', $this->data);
        }  else {
            Controller::render('errors/_404');
        }
    }

    public function addW()
    {
        $data = Request::getFields();
        $insertData = array(
            'warehouse_id' => $data['warehouse_id'],
            'name' => $data['name'],
            'address' => $data['address'],
        );

        $result = $this->warehouses->addW($insertData);

        if(!$result) {
            Response::redirect('danh-sach-kho-hang');
        }

    }

    public function updateW()
    {
        $data = Request::getFields();
        $id = $data['id'];

        $warehouseData = array(
            'warehouse_id' => $data['warehouse_id'],
            'name' => $data['name'],
            'address' => $data['address']
        );

        $result = $this->warehouses::updateW($warehouseData, $id);

        if (!$result) {
            Response::redirect('danh-sach-kho-hang');
        }
    }

    public function deleteW()
    {
        $id = Request::getFields();
        $result = $this->warehouses->deleteW($id['id']);

        if(!$result) {
            Response::redirect('danh-sach-kho-hang');
        }
    }
}