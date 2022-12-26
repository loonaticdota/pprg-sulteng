<?php

class Controller {

    function __construct()
    {

    }

    function render($kind, $dir, $data)
    {
        ob_start();

        switch($kind){

            case "parent":

            foreach($data as $structure){

                if(!$structure[0] || $structure[0] == ""){

                include(BASEPATH."/user/view/".$dir."/".$structure[0].".php");

                }

                else {

                include(BASEPATH."/user/view/".$dir."/".$structure.".php");
                }
        
            }
                
            break;

            case "child":

            include(BASEPATH."/app/view/".$dir."/".$data.".php");

            break;


            default:
            
            include(BASEPATH."/app/view/error/404.php");

            break;


        }

        

        ob_flush();

    }


}

?>