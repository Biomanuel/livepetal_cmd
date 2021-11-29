<?php

require_once ("core/aaa-class.php");
$objcommon = new common();

$us_phone = $us_full_name = $us_email  = $us_phone_err = $us_full_name_err = $us_email_err = $message_err = "";

$referral_id = $country = $password  = $re_password = $re_password = $referral_id_err = $country_err = $password_err  = $re_password_err = $message_err = "";
$size = 0;

if(isset($_GET["id"])){
    $id = $_GET["id"];
}

if(isset($_POST['submit_form_1_btn'])){    
    $us_phone = $_POST['us_phone'];
    $us_full_name = $_POST['us_full_name'];
    $us_email = $_POST['us_email'];
    
    if($us_phone == ""){
        $us_phone_err = "Field cannot be empty";
        $size++;
    }
    if($us_full_name == ""){
        $us_full_name_err = "Field cannot be empty";
        $size++;
    }
    if($us_email == ""){
        $us_email_err = "Field cannot be empty";
        $size++;
    }
    
    $objcommon->query = "WHERE us_email = '$us_email' ";
    if($objcommon->selectUser($pdo)['us_email']){
        $us_email_err = "Email Already Used";
        $size++;
    }
    
    $objcommon->query = "WHERE us_phone = '$us_phone' ";
    if($objcommon->selectUser($pdo)['us_phone']){
        $us_phone_err = "Phone Already Used";
        $size++;
    }
    
    $datadt = $objcommon->currentDateTime();
    $date_time_reg = $datadt[0]." ".$datadt[1];
    
	if($size == 0){
        $objcommon->us_phone = $us_phone;
        $objcommon->us_full_name = $us_full_name;
        $objcommon->us_email = $us_email;
        $objcommon->date_time_reg = $date_time_reg;
        
        if($objcommon->insertUser($pdo) == true){
            $in_id = $pdo->lastInsertId(); 
			header("location: register-submit.php?id=$in_id&msg=sucess");
		}
		else{
            $message_err = "Database Error";
		}
    }else{
        $message_err = "Input Error";
    }
}

if(isset($_POST['submit_form_2_btn'])){    
    $referral_id = $_POST['referral_id'];
    $country = $_POST['country'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $id = $_POST['id'];
    
    if($referral_id == ""){
        $referral_id_err = "Field cannot be empty";
        $size++;
    }
    if($country == ""){
        $country_err = "Field cannot be empty";
        $size++;
    }
    if($password == ""){
        $password_err = "Field cannot be empty";
        $size++;
    }
    if($re_password == ""){
        $re_password_err = "Field cannot be empty";
        $size++;
    }
    
    if($password != $re_password){
        $password_err = "Password doesn't matched";
        $re_password_err = "Password doesn't matched";
        $size++;
    }
    
    $objcommon->query = "WHERE referral_id = '$referral_id' ";
    if($objcommon->selectUser($pdo)['referral_id']){
        $referral_id_err = "Referral ID Already Used";
        $size++;
    }
    
    if($size == 0){
        $objcommon->referral_id = $referral_id;
        $objcommon->country = $country;
        $objcommon->password = md5($password);
        $objcommon->id = $id;
        
        if($objcommon->updateUser($pdo) == true){
			header("location: login.php?msg=sucess");
		}
		else{
            $message_err = "Database Error";
		}
    }else{
        $message_err = "Input Error";
    }
    
}

?>