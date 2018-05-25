<?php

namespace src\model;

use app\DataBase;

class Model
{
    private $model;

    public function __construct()
    {
       $this->model = DataBase::getPDO();
    }

    public function getFilm()
    {
        $select = "SELECT * FROM film";
        $stmt = $this->model->prepare($select);
        $stmt->execute();

        $stmt = $this->jsonFilm($stmt);

        return $stmt;
    }

    public function jsonFilm($stmt)
    {
        $film = [];

        foreach ($stmt as $value) {
            $film[] = $value;
        }

        return json_encode($film);
    }
}