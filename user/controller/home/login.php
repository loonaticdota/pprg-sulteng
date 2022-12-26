<?php

Class Login extends Controller {

    var $helper;
    var $connect;
    var $model;

    function __construct(){

        //Load Helper File
        include(BASEPATH."/app/helper/helper.php");
        include(BASEPATH."/app/db/db.php");
        include(BASEPATH."/user/model/login.php");

        $this->helper = new Helper;
        $this->db = new Db;
        $this->connect = $this->db->connect();
        $this->model = new Model_Login;

    }

    function login(){

        //echo password_hash('12345', PASSWORD_DEFAULT);

        if(isset($_POST['do'])=="login")
        {


            $data = array( 
                            "email" => trim(htmlspecialchars($_POST['email'])),
                            "password" => trim(htmlspecialchars($_POST['password']))
                         );

            $query = $this->connect->query($this->model->checkAvailableUser($data));

            if(!$query->num_rows || $query->num_rows > 1){

                header("Location:".BASEURL."login?auth=failed");
               
            } else {

                $comparePw = password_verify($data['password'], $query->fetch_assoc()['password']);
                if(!$comparePw){ header("Location:".BASEURL."login?auth=password_invalid"); }
                else { 

                    
                
                }

            }

        }

        else 
        
        {

            $this->render("parent", "login", array("head" => "header", "body" => "body", "footer" => "footer"));

        }

    }

}