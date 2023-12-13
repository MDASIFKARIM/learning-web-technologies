
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel-tour";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $discount_name = $_POST["discount_name"];
    $type = $_POST["type"];
    $value = $_POST["value"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $description = $_POST["description"];

    
    $sql = "INSERT INTO discount (discount_name, type, value, start_date, end_date, description)
            VALUES ('$discount_name', '$type', $value, '$start_date', '$end_date', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Discount information stored successfully.";
        header("Location:../View/process_discount.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>