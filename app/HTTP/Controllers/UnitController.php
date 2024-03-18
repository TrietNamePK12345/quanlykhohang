<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Models\UnitModel;
use App\Core\Request;
use App\Core\Response;

class UnitController extends Controller
{
    public $data = [], $units;

    public function __construct()
    {
        $this->units = new UnitModel();
    }


    public function addUnit()
    {
        $data = Request::getFields();

        $insertData = array(
            'unit_id' => $data['unit_id'],
            'name' => $data['name'],
        );

        $result = $this->units->addUnit($insertData);

        if (!$result) {
            Response::redirect('them-san-pham');
        }

    }
}