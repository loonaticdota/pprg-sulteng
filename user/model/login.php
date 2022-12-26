<?php

class Model_Login {

    function checkAvailableUser($data){
        
        return "SELECT password FROM tb_user WHERE tb_user.email = '".$data['email']."'";

    }

}

?>