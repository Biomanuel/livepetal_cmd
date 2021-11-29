<?php
class common{
    function __construct(){}
    
    function currentDateTime(){
        date_default_timezone_set('Africa/Lagos');
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $date_time = array($date,$time);
        return $date_time;
    }
    
    function userLogin($pdo){
        $stmt = $pdo->prepare("SELECT * FROM users WHERE (us_username = :username_email_phone OR us_email = :username_email_phone OR us_phone = :username_email_phone) AND  us_password = :us_password");
        $stmt->bindParam(':username_email_phone', $this->username_email_phone);
        $stmt->bindParam(':us_password', $this->us_password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    function selectUser($pdo){
        $stmt = $pdo->prepare("SELECT * FROM users ".$this->query);
        
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    function insertUser($pdo){        
        $stmt = $pdo->prepare("INSERT INTO `users` (`us_phone`, `us_full_name`, `us_email`, `us_date_time_reg`) VALUES (:us_phone, :us_full_name, :us_email, :date_time_reg)");

        $stmt->bindParam(':us_phone', $this->us_phone);
        $stmt->bindParam(':us_full_name', $this->us_full_name);
        $stmt->bindParam(':us_email', $this->us_email);
        $stmt->bindParam(':date_time_reg', $this->date_time_reg);

        if($stmt->execute()){
            return true;
        }
    }
    function updateUser($pdo){
        
        $stmt = $pdo->prepare("UPDATE `users` SET `referral_id`= :referral_id, `country`= :country, `us_password`= :password WHERE us_id = :id ");

        $stmt->bindParam(':referral_id', $this->referral_id);
        $stmt->bindParam(':country', $this->country);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':id', $this->id);

        if($stmt->execute()){
            return true;
        }
    }
    function getUserID($pdo, $dt){
        $stmt = $pdo->prepare("SELECT * FROM users WHERE us_id = '$dt' ");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    function getUserAll($pdo){
        $stmt = $pdo->prepare("SELECT * FROM users ORDER BY us_full_name ASC");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    function getUserActive($pdo){
        $stmt = $pdo->prepare("SELECT * FROM users WHERE acct_state = 1 ORDER BY us_full_name ASC");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    function getUserBlock($pdo){
        $stmt = $pdo->prepare("SELECT * FROM users WHERE acct_state = 0 ORDER BY us_full_name ASC");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    function insertPaymentGateway($pdo){
         move_uploaded_file($this->upload_iconTemp, "../../assets/img/payment-gateway/".$this->upload_icon_name);
        
        move_uploaded_file($this->upload_qr_imgTemp, "../../assets/img/payment-gateway/".$this->upload_qr_img_name);
        
        $stmt = $pdo->prepare("INSERT INTO `payment_gateway`(`name`, `max_deposit`, `min_deposit`, `wallet_address`, `upload_icon`, `upload_qr_img`, `status`) VALUES (:name, :max_deposit, :min_deposit, :wallet_address, :upload_icon, :upload_qr_img, :status)");

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':max_deposit', $this->max_deposit);
        $stmt->bindParam(':min_deposit', $this->min_deposit);
        $stmt->bindParam(':wallet_address', $this->wallet_address);
        $stmt->bindParam(':upload_icon', $this->upload_icon_name);
        $stmt->bindParam(':upload_qr_img', $this->upload_qr_img_name);
        $stmt->bindParam(':status', $this->status);

        if($stmt->execute()){
            return true;
        }
    }
}
?>