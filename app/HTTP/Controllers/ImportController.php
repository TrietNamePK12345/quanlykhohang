<?php

namespace App\HTTP\Controllers;
use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Models\ImportModel;
use App\Models\ProductModel;
use App\Models\SuppliersModel;
use App\Models\WarehouseModel;


class ImportController extends Controller
{
    public $data = [], $imports, $products, $suppliers, $warehouses;
    public function __construct()
    {
        $this->imports = new ImportModel();
        $this->products = new ProductModel();
        $this->suppliers = new SuppliersModel();
        $this->warehouses = new WarehouseModel();
    }
    public function listImport()
    {
        if (Request::isGet()) {
            $getList = $this->imports::listImport();
            $this->data['list_import'] = $getList;
            Controller::setLayout('admin_layout');
            Controller::render('admin/imports/listImport', $this->data);
        }  else {
            Controller::render('errors/_404');
        }
    }

    public function addImport()
    {
        if (Request::isGet()) {
            $listProduct = $this->products::listProduct();
            $supplier = $this->suppliers::listSuppliers();
            $warehouse = $this->warehouses::listWarehouse();
            $this->data['listSupplier'] = $supplier;
            $this->data['listProduct'] = $listProduct;
            $this->data['listWarehouse'] = $warehouse;
            Controller::setLayout('admin_layout');
            Controller::render('admin/imports/createImport', $this->data);
        }  else {
            Controller::render('errors/_404');
        }
    }

    public function addedImport()
    {
        if (Request::isGet()) {
            $id = Request::getFields();
            $this->data['oneImport'] = $this->imports::detailImport($id['id']);
            Controller::setLayout('admin_layout');
            Controller::render('admin/imports/createdImport', $this->data);
        }  else {
            Controller::render('errors/_404');
        }
    }


    public function insertImport()
    {
        $data = Request::getFields();
        $product_id = $data['product_id'];
        $qty = [
          'qty' => $data['qty_buy']
        ];
        $insertData = array(
            'import_id' => $data['import_id'],
            'supplier_id' => $data['supplier_id'],
            'warehouse_id' => $data['warehouse_id'],
            'creator_id' => $data['creator_id'],
            'product_id' => $data['product_id'],
            'qty_buy' => $data['qty_buy'],
            'import_price' => $data['import_price'],
            'note' => $data['note']
        );

        $result = $this->imports->insertImport($insertData,$product_id,$qty);

        if(!$result) {
            Response::redirect('danh-sach-nhap-hang');
        }
    }

    public function selectProduct()
    {
        $data = Request::getFields();
        $productId = $data['id'];
        $productInfo = $this->imports::findProductById($productId);
        echo json_encode($productInfo);
    }

}