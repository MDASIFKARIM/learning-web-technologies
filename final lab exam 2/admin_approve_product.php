<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_GET['action']) && isset($_GET['product_id'])) {
    $action = $_GET['action'];
    $product_id = $_GET['product_id'];
    
    
    $update_status = ($action === 'approve') ? 1 : 0;
    
    $update_sql = "UPDATE products SET approved = $update_status WHERE id = $product_id";
    
    if ($conn->query($update_sql) === TRUE) {
        echo "Product status updated successfully";
    } else {
        echo "Error updating product status: " . $conn->error;
    }
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Product List</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Product Name</th><th>Description</th><th>Price</th><th>Status</th><th>Action</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        $status = ($row["approved"] == 1) ? "Approved" : "Unapproved";
        echo "<tr><td>" . $row["product_name"] . "</td><td>" . $row["description"] . "</td><td>$" . $row["price"] . "</td><td>" . $status . "</td>";
        
        
        if ($row["approved"] == 1) {
            echo "<td><a href='?action=unapprove&product_id=" . $row["id"] . "'>Unapprove</a></td></tr>";
        } else {
            echo "<td><a href='?action=approve&product_id=" . $row["id"] . "'>Approve</a></td></tr>";
        }
    }
    
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
