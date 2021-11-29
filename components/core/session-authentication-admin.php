<?php
    ob_start();
    session_start();
    if(isset($_SESSION['auth'])){
        if($_SESSION['auth'] == 0 ){
            header("location: ../../login.php?session=notset");
        }else{
            $user_id = $_SESSION['user_id'];
            $auth = $_SESSION['auth'];
            $username = $_SESSION['username'];
        }
    }else{
        header("location: ../../login.php?session=notset");
    }
?>