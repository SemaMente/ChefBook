<?php 

session_start();

if (isset($_SESSION['chefbook_userid'])) {
    $_SESSION['chefbook_userid'] = NULL ;
    unset($_SESSION['chefbook_userid']);
}

//when the user logout redirect user to login page
header("Location: login.php");
die;
