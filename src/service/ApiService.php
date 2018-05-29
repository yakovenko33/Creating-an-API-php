<?php

namespace src\service;

class ApiService
{
    private $apikey;

   public function __construct()
   {
       $this->apikey = "botvot33";
   }

    /**
     * @return string
     */
    public function getApikey()
    {
        return $this->apikey;
    }
}