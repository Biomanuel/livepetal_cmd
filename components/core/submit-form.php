<?php

require_once("aaa-db.php");
require_once("aaa-class.php");
$objcommon = new common();

if(isset($_POST['submit_signup_btn'])){    
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];    
    $company_name = $_POST['company_name'];    
    $gender = $_POST['gender'];    
    $password = $_POST['password'];      
    
    $datadt = $objcommon->currentDateTime();
    $date_time_reg = $datadt[0]." ".$datadt[1];
    
    $objcommon->full_name = $full_name;
    $objcommon->email = $email;
    $objcommon->phone = $phone;
    $objcommon->username = $username;
    $objcommon->company_name = $company_name;
    $objcommon->gender = $gender; 
    $objcommon->password = md5($password); 
    $objcommon->date_time_reg = $date_time_reg; 

    if($objcommon->insertUser($pdo) == true){
        $data['status'] = 1;
        $data['message'] = "success";
        echo json_encode($data);
    }
    else{
        $data['status'] = 0;
        $data['message'] = "Database Error";
        echo json_encode($data);
    }
}

?>