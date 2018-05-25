<?php

namespace app;

use \PDO;
use \PDOException;

class DataBase
{
    public static function getPDO()

        /*
     * To plug configDataBase and create obj PDO;
     * return obj;
     */
    {
        $configDB = parse_ini_file("config/config.ini");;

        $dsn = $dsn = "mysql:host={$configDB['host']};dbname={$configDB['db']};charset={$configDB['charset']}";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $pdo = new PDO($dsn, $configDB['user'], $configDB['pass'], $opt);

        return  $pdo;
    }
}