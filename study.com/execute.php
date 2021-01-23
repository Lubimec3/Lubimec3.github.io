<?php 
    
    session_start();
    require_once 'connect.php';
    include 'config.php';

    if (isset($_POST['btn_signin'])) {
    if ($email == '') {
        $_SESSION['message'] = 'Enter your email!!!';
        header('Location: /'); 
        exit();
    }
    if ($password == '') {
        $_SESSION['message'] = 'Enter your password!!!';
        header('Location: /'); 
        exit();
    }
    
    $password = md5($_POST['password']);
    $result = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['message'] = 'Success!!!';
        header('Location: /'); 
        exit();
    } else {
        $_SESSION['message'] = 'Invalid login or password!';
        header('Location: /');
        exit();
    } 
    }

    $connect->close();  
?>
