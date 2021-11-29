<?php
require_once("components/core/aaa-class.php");
 
$objcommon = new common();

$message_err = $username_email_phone = $password = "";

if(isset($_POST['submit_login_btn'])){
	$size = 0;
    $username_email_phone = $_POST['username_email_phone'];
    $password = $_POST['password'];   
    
    $objcommon->username_email_phone = $username_email_phone;
    $objcommon->us_password = md5($password);
    
    $result = $objcommon->userLogin($pdo);
    if($result != ""){
        if($result['acct_state'] == 0){
            $message_err = "Invalid Login Details";
        }else{
           $_SESSION['user_id'] = $result['us_id'];
           $_SESSION['username'] = $result['us_username'];
           $_SESSION['auth'] = $result['auth'];
            
           if($result['auth'] == 0){
               header("location: account/user/index.php?msg=sucessLogin"); 
           }elseif($result['auth'] == 1){
               header("location: account/admin/index.php?msg=sucessLogin"); 
           }else{
               $message_err = "Invalid Login Details";
           }
           
        }
    }
    else{
        $message_err = "Invalid Login Details";
    }

}

?>