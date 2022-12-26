<?php

class Db {

    var $dbCred;

    function __construct(){

        include(BASEPATH."/config.php");
        $this->dbCred = $dbinfo;

    }

    function connect(){

        try {
        
        $instance = new mysqli(
                               $this->dbCred['host'], 
                               $this->dbCred['username'], 
                               $this->dbCred['password'], 
                               $this->dbCred['dbname']
                             );
        
        return $instance;

        } catch ( Exception $e ){

            var_dump($e);

        }

    }




}

?>