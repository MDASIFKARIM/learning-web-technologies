<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $valid_username = "asif";
    $valid_password = "12345678";

    if ($username === $valid_username && $password === $valid_password) {
        
        $_SESSION["username"] = $username;

        
        if (isset($_POST["remember"])) {
            setcookie("username", $username, time() + (86400 * 30), "/"); 
        }

        header("Location: welcome.php"); 
        exit();
    } else {
        
        echo "Invalid username or password";
    }
}
?>
