<a href="../View/deskboraduser.php"><h1>Deskborad</a></h1>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel-tour";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM photos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $description = $row['description'];
        $file_name = $row['file_name'];
        $file_type = $row['file_type'];

        
        echo "<div>";
        echo "<img src='uploads/$file_name' alt='$description' style='width: 300px; height: auto;'>";
        echo "<p>Description: $description</p>";
        echo "</div>";
    }
} else {
    echo "No photos uploaded yet.";
    
}

$conn->close();
?>
