<?php 
    
    session_start();
    include 'config.php';
    require_once 'connect.php';

    if (isset($_POST['btn_signup'])) {
        if ($email == '') {
            $_SESSION['message'] = 'Enter your email!';
            header('Location: /register.php');
            exit();
        } else if (mb_strlen($email) < 9 || mb_strlen($email) > 90) {
            $_SESSION['message'] = 'This is incorrect email!';
            header('Location: /register.php');
            exit();
        } else if (mb_strlen($password) < 2 || mb_strlen($password) > 50) {
            $_SESSION['message'] = 'Password length is invalid!';
            header('Location: /register.php');
            exit();
        } else if (mb_strlen($password2) < 2 || mb_strlen($password2) > 50) {
            $_SESSION['message'] = 'Second password length is invalid!';
            header('Location: /register.php');
            exit();
        }

        if ($password === $password2) {
            $password = md5($password);
            $connect->query("INSERT INTO `users` (`email`, `password`) 
            VALUES('$email', '$password')");
            $connect->close();
            $_SESSION['message'] = 'Your register success!!!';
            header('Location: /');
        } else {
            $_SESSION['message'] = 'Passwords incorrect!';
            header('Location: /register.php');
            exit();
        }
        if (mysqli_num_rows($check_email) > 0)  {
            $_SESSION['message'] = 'User with this email already registered!!!';
            header('Location: /register.php'); 
            exit();
        }
    }

?>