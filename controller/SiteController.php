<?php

require_once 'Models\Message.php';
require_once 'Components\Pagination.php';

//Контроллер главной страницы
class SiteController {
    public function __construct() {}

    public function actionIndex() {
        $total = Message::getCountMessages();
        $pagination = new Components\Pagination($total, $page=1, $show_def=5, '&page=');
        $messages = Message::findAll($show_def);
        
        require_once(ROOT . '/views/layout/layout.php');
    }
    
    public function actionSorting($count=5) {
        $index = Components\Request::getParams('sorting');
        $page = Components\Request::getParams('page');
        $page = ($page) ? ($page) : 1;
        $total = Message::getCountMessages();
        $pagination = new Components\Pagination($total, $page, $show_def=5, '&page=');
        $messages = Message::sortByDate($index, $show_def, $page);
        
        require_once(ROOT . '/views/layout/layout.php');
    }
    
    public function actionDelete() {
        $index = \Components\Request::getParams('id');
        $messages = Message::deleteMessage($index);
        header('Location: .');
        exit();
    }
    
    public function actionCreate() {
        $params = Components\Request::getDataRequest();
        //var_dump($params); die;
        $messages = Message::createMessage($params);
        
        header('Location: .');
        exit();        
    }
}

