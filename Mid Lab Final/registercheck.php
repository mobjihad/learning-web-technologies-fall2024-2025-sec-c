<?php
   // session_start();
    if(isset($_POST['submit'])){
    

        $nickname = $_POST['nickname'];
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
       

        if($username == NULL || empty($password)){
            echo "username/password! Can't be Null";

        }else if ($username == $password) {
            //echo "valid user!";
          //  $_SESSION['status'] = true;
            header('location: home.php');
        }else{
            echo "invalid user!";
        }
    }else{
        header('location: login.html');
    }

?>