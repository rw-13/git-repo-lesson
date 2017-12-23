<?php
namespace Components;

require_once ("Controller\SiteController.php");

class Request {
    private $routes;

    public function __construct() {
        //Путь к файлу с роутами
        $routesPath = ROOT . '/config/routes.php';
        //Получаем роуты из файла
        $this->routes = include($routesPath);
    }

    //Получить строку запроса
    public function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
    
    public function run() {
        $uri = $this->getURI();
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("/$uriPattern/", $uri)) {
                //Получаем внутренний путь из внешнего согласно правилу
                $internalRoute = preg_replace("/$uriPattern/", $path, $uri);
                //Определить controller, action
                $segments = explode('/', $internalRoute);
                
                $controllerName = array_shift($segments) . 'Controller';
                //$controllerName = ucfirst($controllerName);               
                $actionName = 'action' . ucfirst(array_shift($segments));
                $controllerFile = ROOT . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . $controllerName . '.php';
                
                if (file_exists($controllerFile)) {
                    $controllerObject = new $controllerName;
                }
                
                $result = call_user_func_array(array($controllerObject, $actionName), array());

                if ($result != null) {
                    break;
                }
            }
        }
    }
    
    //Вытаскивает параметры из запроса по имени
    public static function getParams($value) {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                if (isset($_GET[$value])) {
                    return $_GET[$value];
                } else {
                    return false;
                }
                break;
            case 'POST':
                if (isset($_POST[$value])) {
                    return $_POST[$value];
                } else {
                    return false;
                }
                break;
        }
    }
    
    //Вытаскивает массив параметров
    public static function getDataRequest() {
        if (isset($_POST)) {
            $params = array();
            foreach ($_POST as $item => $key) {
                $params[$item] = $key;
            }
        }
        //var_dump($params); die;
        return $params;
    }
}