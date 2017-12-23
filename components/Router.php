<?php

class Router {

    private $routes;

    public function __construct() {
        //Путь к файлу с роутами
        $routesPath = ROOT . '/Config/Routes.php';

        //Получаем роуты из файла
        $this->routes = include($routesPath);
    }

    public function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
}