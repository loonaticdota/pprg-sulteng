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

                if(!$structure['file'] || $structure['file'] == ""){

                include(BASEPATH."/user/view/".$dir."/".$structure.".php");

                }

                else {

                include(BASEPATH."/user/view/".$dir."/".$structure['file'].".php");

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