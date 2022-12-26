<?php

/* Set Application Basic Configuration */

$config = array(

    "baseurl"           =>  "http://localhost/pprg",
    "basepath"          =>  dirname(__FILE__),
    "kernel_path"       =>  dirname(__FILE__)."/app/kernel/kernel.php",
    "controller_path"   =>  dirname(__FILE__)."/app/controller/controller.php",
    "model_path"        =>  dirname(__FILE__)."/app/model/model.php",
    "route_path"        =>  dirname(__FILE__)."/app/route/route.php",
    "api_path"          =>  dirname(__FILE__)."/app/api/api.php",
    "default_request"   =>  "home",
    "secret_key"        =>  "thisisourhardworkplsdontstealsmh"
);


/* Set Application Database Configuration */

$dbinfo = array(

    "host"             =>   "localhost",
    "username"         =>   "root",
    "password"         =>   "",
    "dbname"           =>   "pprg"

);


/* Set App Locale */

date_default_timezone_set('Asia/Makassar');

setlocale(LC_ALL, 'id_ID.UTF8', 
                  'id_ID.UTF-8', 
                  'id_ID.8859-1', 
                  'id_ID', 
                  'IND.UTF8', 
                  'IND.UTF-8', 
                  'IND.8859-1', 
                  'IND', 
                  'Indonesian.UTF8', 
                  'Indonesian.UTF-8', 
                  'Indonesian.8859-1',
                  'Indonesian', 
                  'Indonesia', 
                  'id', 
                  'ID', 
                  'en_US.UTF8', 
                  'en_US.UTF-8', 
                  'en_US.8859-1', 
                  'en_US', 
                  'American', 
                  'ENG', 
                  'English'
         );

/* Set App Locale */



?>