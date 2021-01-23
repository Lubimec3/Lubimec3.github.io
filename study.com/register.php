<?php 
    session_start();
    require_once 'connect.php';
    ini_set('display_errors', 0);
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=500, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Registration page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>

</head>
<body class="body">
    <header class="header"></header>
    <div class="body__registration-form">
        <h1 class="body__title">Registration form</h1>
        <form action="registerexecute.php" method="post">
            <div>
                <p class="body__registration-subtitle"><strong>Enter your email: </strong></p>
                <input class="body__registraion-input" type="email" name="email" placeholder="Enter your email">
            </div>
            <div>
                <p class="body__registration-subtitle"><strong>Enter your password: </strong></p>
                <input class="body__registraion-input" type="password" name="password" placeholder="Password">
            </div>
            <div>
                <p class="body__registration-subtitle"><strong>Enter your second password: </strong></p>
                <input class="body__registraion-input" type="password" name="password_2" placeholder="Confirm">
            </div> 
            <div>
                <button class="body__button_sign_up" type="submit" name="btn_signup">Sign up</button>
            </div>
            <?php 
                if ($_SESSION['message']) {
                    echo '<p class="msg false"><strong>'. $_SESSION['message'] .'</strong></p>';
                }
                unset ($_SESSION['message']);
            ?>
        </form>
    </div>
</body>
</html>



