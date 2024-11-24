<?php
    session_start();
    if(isset($_REQUEST['submit'])){
    
        $username = $_POST['username'];
        $password = $_REQUEST['password'];
       

        if( empty($username) || empty($password)){
            echo "username/password! can't be empty";

        }else if(isset($_SESSION['user'])){

             $userdetails = $_SESSION['user'];

             if($userdetails['username']==$username && $userdetails['password']==$password){
                echo 'Login successfull';

             }else{

                echo'Username or Password Doesnt match';
             }

        }
   
    }

?>
