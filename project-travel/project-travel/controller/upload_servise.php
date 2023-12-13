<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel-tour";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $description = $_POST['description'];

    
    $file_name = $_FILES['photo']['name'];
    $file_tmp = $_FILES['photo']['tmp_name'];
    $file_type = $_FILES['photo']['type'];

    $target_dir = "uploads/"; 
    $target_file = $target_dir . basename($file_name);

    
    move_uploaded_file($file_tmp, $target_file);

    
    $sql = "INSERT INTO photos (description, file_name, file_type) VALUES ('$description', '$file_name', '$file_type')";
    
    if ($conn->query($sql) === TRUE) {
        echo "File uploaded and data saved successfully!";
        header("Location:../View/upload_servise_process.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>