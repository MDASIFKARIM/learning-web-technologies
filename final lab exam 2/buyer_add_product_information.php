<a href="buyer_profil.php">home</a>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<h2>Product List</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Product Name</th><th>Description</th><th>Price</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["product_name"] . "</td><td>" . $row["description"] . "</td><td>$" . $row["price"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
