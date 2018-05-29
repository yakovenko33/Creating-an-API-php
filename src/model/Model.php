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

    public function getAllFilm()
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

    public function getFillName($name)
    {
        $stmt = $this->model->prepare("SELECT * FROM film WHERE name = :name");
        $stmt->bindValue(':name',$name);
        $stmt->execute();

        $stmt = $this->jsonFilm($stmt);

        return $stmt;
    }

    public function getFillYear($year)
    {
        $stmt = $this->model->prepare("SELECT * FROM film WHERE year = :year");
        $stmt->bindValue(':year',$year);
        $stmt->execute();

        $stmt = $this->jsonFilm($stmt);

        return $stmt;
    }

    public function getFill($name, $year)
    {
        $stmt = $this->model->prepare("SELECT * FROM film WHERE name = :name AND year = :year");
        $stmt->bindValue(':year',$year);
        $stmt->bindValue(':name',$name);
        $stmt->execute();

        $stmt = $this->jsonFilm($stmt);

        return $stmt;
    }
}