<?php
//Offline
$dsn = "mysql:host=localhost;dbname=blinktraders";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

//Online
//$dsn = "mysql:host=localhost;dbname=ebcoedun_autozlinks";
//$user = "ebcoedun_smartsocket";
//$passwd = "k(*~#lh?TFKd";
//
//$pdo = new PDO($dsn, $user, $passwd);

$dt = $dt2 = "";

$typeTransact = ["","Send(escrow)", "Send(mutual&friends)", "Receive(mutual&friends)", "Receive(escrow)", "Coin Bought", "Coin Withdrawn", "Packed Bought", "Refund"];

 $paymentStatus = ["Pending","Done"];
 $postStatus = ["Draft","Published"];
 $actionType = ["Pending","Active","",""];
 $kycStatus = ["Decline","Approve"];
 $statusYN = ["No","Yes"];

 $paymentMethod = ["","Paystack","Paypal","AZCoin"];

 $withdrawnFrom = ["","AZC Available Bal"];

 $userType =["User","Admin"];
 $userStatus =["Banned","Active"];
 $userGender =["","Male","Female","Other",""];
    
?>