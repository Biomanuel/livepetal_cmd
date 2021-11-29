<?php

require_once ("aaa-class.php");
$objcommon = new common();

$dataUserID = $objcommon->getUserID($pdo, $user_id);
$dataUserAll = $objcommon->getUserAll($pdo);
$dataUserActive = $objcommon->getUserActive($pdo);
$dataUserBlock = $objcommon->getUserBlock($pdo);

$dataPaymentGateway = $objcommon->getPaymentGatewayAll($pdo);

?>