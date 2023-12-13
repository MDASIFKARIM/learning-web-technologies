<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'travel-tour';

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contactName = $_POST["contact_name"];
    $contactNumber = $_POST["contact_number"];
    $emailAddress = $_POST["email_address"];
    $purpose = $_POST["purpose"];

    
    $sql = "INSERT INTO helpline (contact_name, contact_number, email_address, purpose) VALUES ('$contactName', '$contactNumber', '$emailAddress', '$purpose')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
        header("Location:../View/process helpline.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>