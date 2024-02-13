<?php
namespace Desing\Pattern\singleton;
class DB{
    static $instance = null;
    private function __construct(){

    }    
    /**
     * provide unic and shared instance
     *
     * @return self
     */
    static function getInstance(){
        if (self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function query(){
        /* Database connection */
        echo "\nOutput: success connection with database";
    }
}