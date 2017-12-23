<?php 
namespace Components;
require_once ("Controller\SiteController.php");
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="technical test">
        <meta name="keywords" content="technical test">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/content.css">
        <link rel="stylesheet" href="styles/pagination.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
        <title>technical test</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="clock"><?= "Сегодня: " . date('l, F jS Y'); ?></div>

            <header>
                <h2>Добавить запись на стену:</h2>
                <?php require_once(ROOT . '/views/widget/form.php'); ?>
            </header>

            <section>
                <h2>Записи:</h2>
                <?php require_once(ROOT . '/views/widget/sorting-form.php'); ?>
                <?php require_once(ROOT . '/views/widget/content.php'); ?>
            </section>

            <footer>
                <?php echo $pagination->get(); ?>
            </footer>
        </div>
    </body>
</html>