<?php
include_once("../model/usersModel.php");

if (isset($_POST["name"]) && isset($_POST["contact"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["nid"]) && isset($_POST["age"])) {
    $error = "";
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $nid = $_POST["nid"];
    $age = $_POST["age"];

    if (empty($name)) {
        $error .= "Please enter your name<br>";
    }
    if (empty($contact)) {
        $error .= "Please enter your contact information<br>";
    }
    if (empty($email)) {
        $error .= "Please enter your email<br>";
    }
    if (empty($password)) {
        $error .= "Please enter your password<br>";
    }
    if (empty($nid)) {
        $error .= "Please enter your NID<br>";
    }
    if (empty($age)) {
        $error .= "Please enter your age<br>";
    }

    if (!$error) {
        $registrationResult = signup($name, $contact, $email, $password, $nid, $age);

        if ($registrationResult) {
            echo "<p class='success_msg'> Registration successfully!</p>";
            
            exit();
        } else {
            echo json_encode(['error' => 'Registration failed. Please try again.']);
        }
    } else {
        echo json_encode(['error' => $error]);
    }
}
?>
