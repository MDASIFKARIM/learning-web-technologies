<a href="../View/deskboradadmin.php"><h1>Deskborad</a></h1>

<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'travel-tour';
$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM helpline";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($data = mysqli_fetch_assoc($result)) {
        $id = $data['id'];
        $contact_name = $data['contact_name'];
        $contact_number = $data['contact_number'];
        $email_address = $data['email_address'];
        $purpose = $data['purpose'];

        echo '<strong>' . $id . '</strong><br>';
        echo $contact_name . '<br>';
        echo $contact_number . '<br>';
        echo $email_address . '<br>';
        echo $purpose . '<br>';

        
        echo '<form method="post" action="submit_reply.php">';
        echo '<input type="hidden" name="helpline_id" value="' . $id . '">';
        echo '<textarea name="reply_content" placeholder="Write your reply here"></textarea><br>';
        echo '<input type="submit" value="Submit Reply">';
        echo '</form>';

        echo '<br><br>';
    }
}
?>

<!-- Form submission script (submit_reply.php) -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $helpline_id = $_POST['helpline_id'];
    $reply_content = $_POST['reply_content'];

    

    
    $insert_reply_sql = "INSERT INTO replies (helpline_id, reply_content) VALUES ('$helpline_id', '$reply_content')";
    if ($conn->query($insert_reply_sql) === TRUE) {
        echo "Reply submitted successfully";
    } else {
        echo "Error submitting reply: " . $conn->error;
    }
}
$conn->close();
?>
