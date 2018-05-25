<?php

use src\model\Model;
use src\service;

class ApiController
{
    public function testAction()
    {
        $model = new Model();
        $film = $model->getFilm();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            echo $film;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $status = 'work';
            echo json_encode($status);
        }


        //print_r("Hello Test");
    }

    public function requestAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $data = array(
            'neighbor0' => 'Vlad',
            'neighbor1' => 'Danya'
        );

        echo json_encode($data);
        } else {
            $request = "POST";
            echo json_encode($request);
        }
    }
}