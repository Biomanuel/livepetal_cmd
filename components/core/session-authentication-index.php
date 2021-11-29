<?php
    ob_start();
    session_start();
    if(isset($_SESSION['auth'])){
        $user_id = $_SESSION['user_id'];
        $iauth = $_SESSION['auth'];
        $username = $_SESSION['username'];
    }else{
        header("location: sign-in.php?session=notset");
    }
?>