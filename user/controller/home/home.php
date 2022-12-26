<?php

Class Home extends Controller {

    function __construct(){

        //$this->kernel = new Kernel;

    }

    function home(){

        $this->render("parent", "home", array("head" => "header", "body" => "body", "footer" => "footer"));

    }


}

?>