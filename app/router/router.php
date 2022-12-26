<?php

class Router {

    function __construct(){ require(BASEPATH."/app/controller/controller.php"); }

    function load($request){

        switch($request){

            case "home":
            include(BASEPATH."/user/controller/home/home.php");
            $class = new Home;
            $class->home();
            break;

            case "login":
            include(BASEPATH."/user/controller/home/login.php");
            $class = new Login;
            $class->login();
            break;


            default:
            $cont = new Controller;
            $cont->render("child","error","404");
            break;

        }

        

    }

}



?>