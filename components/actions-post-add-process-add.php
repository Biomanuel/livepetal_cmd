<?php

require_once ("account/user/components/aaa-class.php");
$objuser = new user();

require_once ("account/admin/components/aaa-class.php");
$objadmin = new admin();

$region = $band = $model = $color = $condition = $transmission = $mileage = $fuel_type = $vin_number = $car_price = $package_choosen_price = $title_ads = "";
    
$region_err = $band_err = $model_err = $color_err = $condition_err = $transmission_err = $mileage_err = $register_car_err = $fuel_type_err = $vin_number_err = $car_price_err = $us_img_err = $car_price_err = $email_err = $phone_number_err = $title_ads_err = $message_err_1 = "";

$size = $register_car = $facebook_ad = $instagram_ad = $negotiable  = 0;
 
if(isset($_GET['id'])){
    $dt = $_GET['id'];
    $dataPackageID = $objuser->getPackageID($pdo, $dt);
    
    $max_gallery_photos = $dataPackageID['max_gallery_photos']; 
    $title = $dataPackageID['title']; 
    $price = $dataPackageID['price']; 
}

if(isset($_POST['submit_package_ads_btn'])){ 
    $region = $_POST['region'];
    $band = $_POST['band'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $condition = $_POST['condition'];
    $transmission = $_POST['transmission'];
    $mileage = $_POST['mileage'];
    $register_car = $_POST['register_car'];
    $fuel_type = $_POST['fuel_type'];
    $vin_number = $_POST['vin_number'];
    $car_price = $_POST['car_price'];
    $negotiable = $_POST['negotiable'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $package_choosen_price = $_POST['package_choosen_price'];
    $facebook_ad = $_POST['facebook_ad'];
    $instagram_ad = $_POST['instagram_ad'];
    $max_gallery_photos = $_POST['max_gallery_photos'];
    $price = $_POST['package_choosen_price'];
    $title = $_POST['title'];
    $title_ads = $_POST['title_ads'];
    $dt = $_POST['id'];
    
    if($title_ads == ""){
        $title_ads_err = "Field cannot be empty";
        $size++;
    }
    if($region == ""){
        $region_err = "Field cannot be empty";
        $size++;
    }
    if($band == ""){
        $band_err = "Field cannot be empty";
        $size++;
    }
    if($model == ""){
        $model_err = "Field cannot be empty";
        $size++;
    }
    if($color == ""){
        $color_err = "Field cannot be empty";
        $size++;
    }
    if($condition == ""){
        $condition = "0";
        $size++;
    }
    if($transmission == ""){
        $transmission = "0";
        $size++;
    }
    if($mileage == ""){
        $mileage_err = "Field cannot be empty";
        $size++;
    }
    if($register_car == ""){
        $register_car_err = "Field cannot be empty";
        $size++;
    }
    if($fuel_type == ""){
        $fuel_type_err = "Field cannot be empty";
        $size++;
    }
    if($vin_number == ""){
        $vin_number_err = "Field cannot be empty";
        $size++;
    }
    if($car_price == ""){
        $car_price_err = "Field cannot be empty";
        $size++;
    }
    if($email == ""){
        $email_err = "Field cannot be empty";
        $size++;
    }
    if($phone_number == ""){
        $phone_number_err = "Field cannot be empty";
        $size++;
    }
    
	if($size == 0){
        $objuser->region = $region;
        $objuser->band = $band;
        $objuser->model = $model;
        $objuser->color = $color;
        $objuser->condition = $condition;
        $objuser->transmission = $transmission;
        $objuser->mileage = $mileage;
        $objuser->register_car = $register_car;
        $objuser->fuel_type = $fuel_type;
        $objuser->vin_number = $vin_number;
        $objuser->car_price = floatval(str_replace(',', '', $car_price));
        $objuser->negotiable = $negotiable;
        $objuser->email = $email;
        $objuser->phone_number = $phone_number;
        $objuser->package_choosen_price = $package_choosen_price;
        $objuser->facebook_ad = $facebook_ad;
        $objuser->instagram_ad = $instagram_ad;
        $objuser->dt = $dt;
        $objuser->title_ads = $title_ads;
        $objuser->user_responsible = $uid;
        $objuser->unique_id = $uid."i".uniqid();
        $objuser->request_date = $objuser->currentDateTime()[0];
        
        if($objuser->insertPostPackage($pdo) == true){
            
			header("location: post-add-process-pay.php?id".$pdo->lastInsertId()."&msg=sucess");
		}
		else{
            $message_err_1 = "Database Error";
		}
    }else{
        $message_err_1 = "Input Error";
    }
}

?>