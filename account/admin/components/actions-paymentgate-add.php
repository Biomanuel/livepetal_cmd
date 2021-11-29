<?php

require_once ("../../components/core/aaa-class.php");
$objcommon = new common();

$name = $max_deposit = $min_deposit = $wallet_address = $status = $upload_icon = $upload_qr_img = $wallet_address_err = $name_err = $max_deposit_err = $min_deposit_err = $status_err = $message_err = $upload_icon_err = $upload_qr_img_err = "";
$size = $status = 0;

if(isset($_POST['submit_payment_gate_btn'])){    
    $name = $_POST['name'];
    $max_deposit = $_POST['max_deposit'];
    $min_deposit = $_POST['min_deposit'];
    $wallet_address = $_POST['wallet_address'];
    $status = $_POST['status'];
    $upload_icon = $_FILES['upload_icon']['name'];
    $upload_qr_img = $_FILES['upload_qr_img']['name'];
    
    if($name == ""){
        $name_err = "Field cannot be empty";
        $size++;
    }
    if($max_deposit == ""){
        $max_deposit_err = "Field cannot be empty";
        $size++;
    }
    if($min_deposit == ""){
        $min_deposit_err = "Field cannot be empty";
        $size++;
    }
    if($wallet_address == ""){
        $wallet_address_err = "Field cannot be empty";
        $size++;
    }
    if($status == ""){
        $status_err = "Field cannot be empty";
        $size++;
    }
    if($upload_icon){
        $upload_iconTemp = $_FILES['upload_icon']['tmp_name'];
        $upload_iconFileType = pathinfo($upload_icon,PATHINFO_EXTENSION);
        $upload_icon_size = $_FILES['upload_icon']['size'];
        $upload_icon_ext = explode(".", $upload_icon);
        $upload_icon_name = "icon_".$upload_icon_ext[0]."".microtime(true).".".$upload_icon_ext[1];
        
        $upload_iconExt = array("jpg", "jpeg", "png", "JPG", "JPEG", "PNG");
    
        if($upload_icon_size > 500045){
            $upload_icon_err = "File must be less than 500KB";
            $size++;
        }

        if (!in_array($upload_iconFileType, $upload_iconExt)){
            $upload_icon_err = "Only images file is allow";
            $size++;
        }
    }else{
        $upload_icon_err = "Field cannot be empty";
        $size++;
    }
    if($upload_qr_img){
        $upload_qr_imgTemp = $_FILES['upload_qr_img']['tmp_name'];
        $upload_qr_imgFileType = pathinfo($upload_qr_img,PATHINFO_EXTENSION);
        $upload_qr_img_size = $_FILES['upload_qr_img']['size'];
        $upload_qr_img_ext = explode(".", $upload_qr_img);
        $upload_qr_img_name = "qr_".$upload_qr_img_ext[0]."".microtime(true).".".$upload_qr_img_ext[1];
        
        $upload_qr_imgExt = array("jpg", "jpeg", "png", "JPG", "JPEG", "PNG");
    
        if($upload_qr_img_size > 500045){
            $upload_qr_img_err = "File must be less than 500KB";
            $size++;
        }

        if (!in_array($upload_qr_imgFileType, $upload_qr_imgExt)){
            $upload_qr_img_err = "Only images file is allow";
            $size++;
        }
    }else{
        $upload_qr_img_err = "Field cannot be empty";
        $size++;
    }
    
	if($size == 0){
        $objcommon->name = $name;
        $objcommon->max_deposit = $max_deposit;
        $objcommon->min_deposit = $min_deposit;
        $objcommon->wallet_address = $wallet_address;
        $objcommon->status = $status;  
        $objcommon->upload_iconTemp = $upload_iconTemp;
        $objcommon->upload_icon_name = $upload_icon_name;
        $objcommon->upload_qr_imgTemp = $upload_qr_imgTemp;
        $objcommon->upload_qr_img_name = $upload_qr_img_name;
        
        if($objcommon->insertPaymentGateway($pdo) == true){
            
			header("location: deposit-paymentgate.php?msg=sucess");
		}
		else{
            $message_err = "Database Error";
		}
    }else{
        $message_err = "Input Error";
    }
}

?>