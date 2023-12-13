<?php
require_once('../model/usersModel.php');

session_start();

$packageId = $_POST["package_id"];
$currentUserId = $_POST["user_id"];
$fullName = $_POST["full_name"];
$address = $_POST["address"];
$city = $_POST["city"];
$zipCode = $_POST["zip_code"];
$payAmount = $_POST["pay_amount"];
$paymentMethod = $_POST["payment_method"];
$transactionID = $_POST["transaction_id"];

if (empty($fullName) || empty($address) || empty($city) || empty($zipCode) || empty($payAmount) || empty($paymentMethod) || empty($transactionID)) {
    echo "Please fill in all the fields.";
    header('location: ../view/billing_information.php');
} else {
    $status = processPayment($currentUserId,$packageId, $fullName, $address, $city, $zipCode, $payAmount, $paymentMethod, $transactionID);
    
    if ($status) {
        echo "Payment Processed Successfully";
        header('location: ../view/index.php');
    } else {
        echo "Payment Processing Failed. Please try again.";
        header('location: ../view/index.php');
    }
}
?>
