<?php

class Database
{
    private $_dbh;

    function __construct(){
        $this->connect();
    }

    function connect(){
        try{
            define("DB_DSN", "mysql:dbname=ryanguel_it328");
            define("DB_USERNAME", "ryanguel_students");
            define("DB_PASSWORD", "StudentPass1!");
            //try to instantiate a dbh

            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            echo "Connected!";
            return $this->_dbh;
        }catch(PDOException $exception){
            echo $exception->getMessage();
        }
    }
}