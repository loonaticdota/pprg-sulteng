<?php

if(!defined('BASEPATH')){ echo "Access Denied"; }

else {

    require_once(BASEPATH."/vendor/autoload.php");

    if(!isset($_SESSION)){ session_start(); }

    $url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url = strtok($url,'?');

    define('BASEURL', $config['baseurl']."/");

    $segment = array_filter(explode("/", str_replace($config['baseurl']."/", "", $url)));

    require BASEPATH."/app/router/router.php";
    
    if(count($segment)>0){ $request = implode("/", $segment); } 
    else { $request = $config['default_request']; }

    // Load Available Request
    $router = new Router;
    $router->load($request);
    
        
}

?>