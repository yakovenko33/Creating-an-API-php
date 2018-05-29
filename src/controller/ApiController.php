<?php

use src\model\Model;
use src\service;

class ApiController
{
    /*GET*/
    public function getAction()
    {
        $model = new Model();
        $film = $model->getFilm();

        echo $_GET['name'];
        exit;

        echo $film;

        print_r("Hello GET!");
    }

    /*POST*/
    public function postAction()
    {
        $model = new Model();
        $film = $model->getFilm();

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