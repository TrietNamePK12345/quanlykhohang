<?php

namespace App\HTTP\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Models\ClientModel;
use App\Models\ProductModel;

class ClientController extends Controller
{
   public $data = [], $users, $products;

    public function __construct()
    {
        $this->users = new ClientModel();
        $this->products = new ProductModel();
    }


    public function home()
    {
        $getList = $this->users::getList();
        $this->data['list_user'] = $getList;
        $this->data['listProduct'] = $this->products::listProduct();
        Controller::setLayout('client_layout');
        return Controller::render('client/home/home',$this->data);
    }

    public function about()
    {
        Controller::setLayout('client_layout');
        return Controller::render('client/about_us/about_us');
    }

    public function contact()
    {
        Controller::setLayout('client_layout');
        return Controller::render('client/contact/contact');
    }

}