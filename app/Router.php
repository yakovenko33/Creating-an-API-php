<?php

final Class Router
{
    public $url;
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public static function getInstance()
    {
        if (null ===  static::$instance){
            static::$instance = new Router();
        }

        return static::$instance;
    }

    public function start()
    {
        $this->url = explode( '/', $_SERVER['REQUEST_URI']);

        $controllerName = "Default";

        if(!empty($this->url[1])) {
            $controllerName = $this->url[1];
        }

        $controllerName = ucfirst($controllerName."Controller");

        $controllerObj = $this->requireController($controllerName);
        $actionName = 'home';

        if(!empty($this->url[2])) {
            $actionName = $this->url[2];
        }

        $actionName = $actionName .'Action';

        if(!empty($this->url[3])) {
            $value = (int)$this->url[3];
        }

        if(!method_exists($controllerObj,$actionName)) {
            print_r("Error 404");
            exit;
        } else {
            if(!empty($value)) {
                $controllerObj->$actionName($value);
            }
            $controllerObj->$actionName();
        }
    }

    /*
     * Include our NameController.php and create object $controller
    * return object $controller;
    */
    private function requireController($controllerName)
    {
        $controllerFile = ROOT.'/src/controller/'.$controllerName .'.php';

        if(file_exists($controllerFile)){
            require_once($controllerFile);
            $controller = new $controllerName;

            return $controller;
        }

        return print_r("Error 404");
    }
}