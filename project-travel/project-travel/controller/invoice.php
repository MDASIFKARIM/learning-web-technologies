
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
$invoice_number = $_POST['invoice_number'];
$booking_reference = $_POST['booking_reference'];
$total_amount = $_POST['total_amount'];
$status = $_POST['status'];
$issue_date = $_POST['issue_date'];


$sql = "INSERT INTO invoice (invoice_number, booking_reference, total_amount, status, issue_date) VALUES ('$invoice_number', '$booking_reference', $total_amount, '$status', '$issue_date')";


if ($conn->query($sql) === TRUE) {
    echo "Invoice submitted successfully";
    header("Location:../View/process_invoice.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();
?>