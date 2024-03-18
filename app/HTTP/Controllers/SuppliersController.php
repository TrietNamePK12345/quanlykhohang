<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Models\SuppliersModel;

class SuppliersController extends Controller
{
    public $data = [], $suppliers;
    public function __construct()
    {
        $this->suppliers = new SuppliersModel();
    }

    public function listSuppliers()
    {
        if (Request::isGet()) {
            $getList = $this->suppliers::listSuppliers();
            $this->data['list_suppliers'] = $getList;
            Controller::setLayout('admin_layout');
            Controller::render('admin/suppliers/a_list_suppliers', $this->data);
        }  else {
            Controller::render('errors/_404');
        }
    }

    public function addSuppliers()
    {
        if (Request::isGet()) {
            Controller::setLayout('admin_layout');
            Controller::render('admin/suppliers/a_add_supplier', $this->data);
        }  else {
            Controller::render('errors/_404');
        }
    }

    public function insertSupp()
    {
        $data = Request::getFields();
            $insertData = array(
                'supplier_id' => $data['supplier_id'],
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'address' => $data['address'],
                'person_contact' => $data['person_contact']
            );

        $result = $this->suppliers->addSuppliers($insertData);

            if(!$result) {
                Response::redirect('danh-sach-nha-cung-cap');
            }
    
    }

    public function deleteSupp()
    {
        $id = Request::getFields();
        $result = $this->suppliers->deleteSupp($id['id']);

        if(!$result) {
            Response::redirect('danh-sach-nha-cung-cap');
        }
    }

    public function updateSupp()
    {
        $data = Request::getFields();
        $id = $data['id'];

        $supplierData = array(
            'supplier_id' => $data['supplier_id'],
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address'],
            'person_contact' => $data['person_contact']
        );
        
        $result = $this->suppliers::updateSupp($supplierData, $id);

        if (!$result) {
            Response::redirect('danh-sach-nha-cung-cap');
        }
    }

}