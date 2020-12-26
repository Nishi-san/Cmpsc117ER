<?php
    session_start();
    
    if( isset($_POST['username']) && isset($_POST['password'])) {

        if( !empty($_POST['username']) && !empty($_POST['password']) ){

            $usernameSubmit = $_POST['username'];
            $passwordSubmit = $_POST['password'];

            if( ($usernameSubmit == 'erwinramos') && ($passwordSubmit = 'password') ){
                header('Location: home.html');
            }else{
                $_SESSION['message'] = "Login Username and Password Error";
                header('Location: index.php');
            }

        }else{
            $_SESSION['message'] = "Login Username and Password Error";
            header('Location: index.php');
        }
    }else{
        $_SESSION['message'] = "Login Username and Password Error";
        header('Location: index.php');
    }
    
    