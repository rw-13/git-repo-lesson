<?php

namespace Controller;

require_once 'Components\Router.php';
require_once 'Components\Request.php';
require_once 'Components\Db.php';
require_once 'Components\ApplicationHelper.php';
require_once 'Controller\SiteController.php';

class Controller {

    private function __construct() {}

    static function run() {
        $instance = new Controller();
        $instance->init();
        $instance->handleRequest();
    }

    //Загрузка данных конфигурации приложения
    private function init() {
        //Подключить файл настроек приложения
        $applicationHelper = \Components\ApplicationHelper::instance();
        $applicationHelper->init();
    }

    //Обработка строки запроса
    function handleRequest() {
        $request = new \Components\Request();
        $request->run();
    }
}

?>