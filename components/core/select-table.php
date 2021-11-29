<?php
require_once("aaa-db.php");

require_once("aaa-class.php");
$objcommon = new common();

if(isset($_POST['auth_email'])){    
    $email = $_POST['email'];
    
    $objcommon->query = "WHERE us_email = '$email' ";
    if($objcommon->selectUser($pdo)['us_email']){
        $data['status'] = 1;
        $data['message'] = "Email Already Used";
        echo json_encode($data);
    }else{
        $data['status'] = 0;
        $data['message'] = "Email Not In Use";
        echo json_encode($data);
    }
}

if(isset($_POST['auth_phone'])){    
    $phone = $_POST['phone'];
    
    $objcommon->query = "WHERE us_phone = '$phone' ";
    if($objcommon->selectUser($pdo)['us_phone']){
        $data['status'] = 1;
        $data['message'] = "Phone Already Used";
        echo json_encode($data);
    }else{
        $data['status'] = 0;
        $data['message'] = "Phone Not In Use";
        echo json_encode($data);
    }
}

if(isset($_POST['auth_username'])){    
    $username = $_POST['username'];
    
    $objcommon->query = "WHERE us_username = '$username' ";
    if($objcommon->selectUser($pdo)['us_username']){
        $data['status'] = 1;
        $data['message'] = "Username Already Used";
        echo json_encode($data);
    }else{
        $data['status'] = 0;
        $data['message'] = "Username Not In Use";
        echo json_encode($data);
    }
}

if(isset($_POST['get_model_band'])){    
    $band = $_POST['band'];
    $result = [];
    
    $data = $objcommon->getBrandModelAll($pdo, "model", $band); 
    for ($i=0; $i <count($data) ; $i++){
        $result[$i] = "<option value='".$data[$i]['id']."'>".$data[$i]['name']." </option>";
    }
    
    if($result){
        $data['result'] = $result;
        $data['status'] = 1;
        $data['message'] = "Record Found";
        echo json_encode($data);
    }else{
        $data['status'] = 0;
        $data['message'] = "No Record Found";
        echo json_encode($data);
    }    
}
?>