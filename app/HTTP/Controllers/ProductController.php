<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Models\ClientModel;


    class ProductController extends Controller
    {

        public function shop()
        {
            Controller::setLayout("client_layout");
            return Controller::render('client/shop/shop');
        }
        public function product_detail()
        {
            Controller::setLayout("client_layout");
            return Controller::render('client/shop/product_detail');

        }

    }