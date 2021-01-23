<?php

    require_once 'connect.php';

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password2 = trim($_POST['password_2']);
    $result = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");