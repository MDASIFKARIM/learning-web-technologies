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
$reviewerName = $_POST['reviewerName'];
$rating = $_POST['rating'];
$reviewTitle = $_POST['reviewTitle'];
$reviewContent = $_POST['reviewContent'];


$sql = "INSERT INTO review (reviewer_name, rating, review_title, review_content)
        VALUES ('$reviewerName', $rating, '$reviewTitle', '$reviewContent')";

if ($conn->query($sql) === TRUE) {
    echo "Review submitted successfully";
    header("Location:../View/submit_review.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();
?>