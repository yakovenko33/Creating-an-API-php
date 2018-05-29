<?php

use src\model\Model;
use src\service\ApiService;

class ApiController
{
    /*GET*/
    public function getAction()
    {
        $api = new ApiService();
        $model = new Model();
        $apikey = $api->getApikey();

        if ($_GET['apikey'] === $apikey){
            $film = $model->getFill($_GET['name'], $_GET['year']);
            echo $film;
        } else {
            $data = 'ApiKey is not exist!';
            echo json_encode($data);
        }
    }

    /*POST*/
    public function postAction()
    {
        $model = new Model();
        $film = $model->getAllFilm();

        $data = file_get_contents("php://input");

        echo $data;
    }

    /*PUT*/
    public function putAction()
    {
        $data = file_get_contents('php://input');

        echo $data;
    }

    /*DELETE*/
    public function deleteAction()
    {

    }
}