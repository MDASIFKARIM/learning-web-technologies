<html>
<html>
<head>
    <title>Add New Product</title>
</head>
<body>
<a href="seller_profil.php">home</a>
    <h2>Add New Product</h2>
    <form action="seller_add_product.php" method="POST">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required><br><br>
        
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>
        
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>
        
        <input type="submit" value="Add Product">
    </form>
</body>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$product_Name = $_POST['product_name'];
$description = $_POST['description'];
$price = $_POST['price'];


$sql = "INSERT INTO  products (product_name, description, price) VALUES ('$product_Name', '$description', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "New product added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("Location:seller_add_product.php");
}
}
$conn->close();
?>

</html>
