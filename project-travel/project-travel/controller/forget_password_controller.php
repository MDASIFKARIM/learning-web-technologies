<?php
require_once('../model/usersModel.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $newPassword = $_POST["password"];
    $confirmPassword = $_POST["cpassword"];

    if (empty($email) || empty($newPassword) || empty($confirmPassword)) {
        echo "Please fill in all the fields.";
    }  else {
        $status = forgotPassword($email, $newPassword);

        if ($status) {
            echo "Password reset successful.";
            
        } else {
            echo "Password reset failed. Please try again.";
            header('location: ../view/forgot_password.php');
        }
    }
}
?>
