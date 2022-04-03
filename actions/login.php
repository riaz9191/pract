<?php
    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
    
        if ($email == 'admin@gmail.com' && $pass == '12345') {
            session_start();
            $_SESSION['login'] = true;
            header('Location: ../admin/dashboard.php'); 
           
        }
        else {
            echo 'Wrong Input';
        }
    }
