<?php

namespace App\HTTP\Controllers;
use App\Core\Request;
use App\Core\Controller;
use App\Core\Response;
use App\Models\ProducerModel;

class ProducerController extends Controller
{
    public $data = [], $producer;

    public function __construct()
    {
        $this->producer = new ProducerModel();
    }


        public function addProducer()
        {
            $data = Request::getFields();

            $insertData = array(
                'producer_id' => $data['category_id'],
                'name' => $data['name'],
                'tel' => $data['tel'],
                'address' => $data['address'],
            );

            $result = $this->producer->addProducer($insertData);

            if (!$result) {
                Response::redirect('them-san-pham');
            }

        }
}