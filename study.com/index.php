<?php 
    session_start();
    require_once 'connect.php';
    ini_set('display_errors', 0);
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=500, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <title>Login page</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="body">
        <header class="header"></header>
        <form action="execute.php" method="post">
        <div class="body__login"> 
                <h1 class="body__title">Login</h1>
                <div>
                    <span class="body__subtitle subtitle">E-mail address: *<br></span>
                    <input class="body__input" type="email" name="email" placeholder="Your email address (... @ ...)" ><br>
                    <span class="body__subtitle subtitle">Password: *<br></span>
                    <div class="password">
                        <input class="body__input" id="password-input" type="password" name="password" placeholder="********">     
                        <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                        <script src="script.js"></script>
                    </div>                     
                    <div class="body__container">
                        <div>  
                            <input type="checkbox" id="check1"><label class="body__checkbox_text" for="check1">Stay signed in</label>
                        </div>
                        <a class="body__link" href="http://google.com" target="_blank">Forgot password?</a>
                    </div>
                </div> 
                <div>
                    <input class="body__button_sign_in" type="submit" name="btn_signin" value="Sign in">
                </div>
            </form>
            <div>
                <div class="body__text">Don't have an account yet? <a class="body__registerlink" href="/register.php">Register</a>.</div>
            </div>
            <div class="body__container">
                <input class="body__button_facebook" type="submit" name="btn_facebook" value="Sign in with Facebook" disabled>
                <input class="body__button_google"  type="submit" name="btn_google" value="Sign in with Google" disabled>
            </div>
            <?php 
                if ($_SESSION['message']) {
                    if ($_SESSION['message'] == 'Success!!!' || $_SESSION['message'] == 'Your register success!!!') {
                        echo '<p class="msg true"><strong>'. $_SESSION['message'] .'</strong></p>';
                    } else {
                        echo '<p class="msg false"><strong>'. $_SESSION['message'] .'</strong></p>';
                    }
                }
                unset ($_SESSION['message']);
            ?>
        </div>
    </body>
</html>