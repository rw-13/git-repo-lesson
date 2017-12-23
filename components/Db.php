<?php 
        
namespace Components;

class Dbconnector {

    private static $db;

    //Конструктор подключения к БД
    private function __construct($settings) {
        $dsn = "mysql:host={$settings['host']}; dbname={$settings['dbname']}";
        self::$db = new \PDO($dsn, self::$settings['username'], self::$settings['password']);
        self::$db = exec('SET NAMES "utf8"');
    }

    //Получить файл настроек БД
    static public function getSettingsPath() {
        $settingsPath = ROOT . '/Config/Config.php';
        return require_once($settingsPath); 
    }

    //Создать соединение с БД
    static public function getConnection() {
        $settings = self::getSettingsPath();
        $dsn = "mysql:host={$settings['host']}; dbname={$settings['dbname']}";
        if (!self::$db) {
            self::$db = new \PDO($dsn, $settings['username'], $settings['password']);
            self::$db->exec("set names utf8");    
        } else {
            return self::$db;
        }
        return self::$db;
    }
}
?>
