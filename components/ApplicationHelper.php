<?php
namespace Components;

require_once('Components/Exception.php');

class ApplicationHelper {
    private static $instance;
    
    private $config = ROOT . "/Config/Data.xml";

    private function __construct() {}

    static function instance() {
        if ( ! self::$instance ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    function init() {
        if(true) {
            return;
        } else {
            $this->getOptions();
        }
    }
            
    private function getOptions() {
        $this->ensure(file_exists($this->config), "Файл конфигурации не найден");
        $options = SimpleXml_load_file($this->config);
//        echo "<pre>";
//        print_r($options);
//        echo "</pre>";
        $this->ensure( $options instanceof \SimpleXMLElement, "Файл конфигурации испорчен" );
        $dsn = (string)$options->dsn;
        $this->ensure( $dsn, "DSN не найден" );
    }

    private function ensure( $expr, $message ) {
        if ( ! $expr ) {
            throw new \Components\AppException( $message );
        }
    }
}
?>
