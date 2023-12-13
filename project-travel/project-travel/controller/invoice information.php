
    
<a href="../View/deskboraduser.php"><h1>Deskborad</a></h1>
<?php
$hostname = 'localhost';
$username = 'root';
$password =''; 
$dbname = 'travel-tour';
$conn = new mysqli ($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
die ("Connection failed.".$conn->connect_error);
}





$sql = "SELECT * FROM invoice";
$result = mysqli_query($conn, $sql);
if ($result) {
while($data = mysqli_fetch_assoc($result)) {
$invoice_number = $data['invoice_number'];
$booking_reference = $data['booking_reference'];
$total_amount = $data['total_amount'];
$issue_date = $data['issue_date'];




echo '<strong>'.$invoice_number. '</strong><br>';
echo $booking_reference.'<br>';
echo $total_amount.'<br>';
echo $issue_date.'<br>';
echo '<br><br>';
}
}
?>

