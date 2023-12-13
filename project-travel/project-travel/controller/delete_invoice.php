
<a href="../View/deskboradadmin.php"><h1>Deskborad</a></h1>

<?php
$hostname = 'localhost';
$username = 'root';
$password = ''; 
$dbname = 'travel-tour';
$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['delete_id'])) {
    $id_to_delete = $_POST['delete_id'];

    $delete_sql = "DELETE FROM invoice WHERE id = '$id_to_delete'";
    if ($conn->query($delete_sql) === TRUE) {
        echo "Invoice deleted successfully.";
    } else {
        echo "Error deleting invoice: " . $conn->error;
    }
}

$sql = "SELECT * FROM invoice";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($data = mysqli_fetch_assoc($result)) {
        $id = $data['id'];
        $invoice_number = $data['invoice_number'];
        $booking_reference = $data['booking_reference'];
        $total_amount = $data['total_amount'];
        $issue_date = $data['issue_date'];

        echo '<strong>' . $invoice_number . '</strong><br>';
        echo $booking_reference . '<br>';
        echo $total_amount . '<br>';
        echo $issue_date . '<br>';
        
        echo '<form method="POST">';
        echo '<input type="hidden" name="delete_id" value="' . $id . '">';
        echo '<input type="submit" value="Delete">';
        echo '</form>';
        echo '<br><br>';
    }
}
?>
