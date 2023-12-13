<a href="../View/deskboradadmin.php"><h1>Deskborad</a></h1>


<?php
$hostname = 'localhost';
$username = 'root';
$password =''; 
$dbname = 'travel-tour';
$conn = new mysqli ($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
die ("Connection failed.".$conn->connect_error);
}





$sql = "SELECT * FROM review";
$result = mysqli_query($conn, $sql);
if ($result) {
while($data = mysqli_fetch_assoc($result)) {
$reviewer_Name = $data['reviewer_Name'];
$rating = $data['rating'];
$review_Title = $data['review_Title'];
$review_Content = $data['review_Content'];




echo '<strong>'.$reviewer_Name. '</strong><br>';
echo $rating.'<br>';
echo $review_Title.'<br>';
echo $review_Content.'<br>';
echo '<br><br>';
}
}
?>

