<?php
    session_start();
    if(isset($_REQUEST['submit'])){
    
        $username = $_POST['username'];
        $password = $_REQUEST['password'];
       

        if($username == null || empty($password)){
            echo "username/password! Can't be Null";

        }else if ($username == $password) {
            //echo "valid user!";
            $_SESSION['status'] = true;
            header('location: home.php');
        }else{
            echo "invalid user!";
        }
    }else{
        header('location: login.html');
    }

?>