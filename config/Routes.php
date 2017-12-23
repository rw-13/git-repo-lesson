<?php
//Массив маршрутов
return array(    
    //Cортировка
    '\?(sorting)=[0-9]$' => 'site/sorting',
    //Постраничная навигация по результатам сортировки
    '\?sorting=[0-9]&page=[0-9]$' => 'site/sorting',
    //Удаление поста со стены
    '\?deletemessage' => 'site/delete',
    //Добавление поста на страницу
    '\?createmessage' => 'site/create',

    //Главная страница
    'index.php' => 'site/index',
    '^$' => 'site/index',    
);