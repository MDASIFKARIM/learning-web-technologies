
 

  

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

  if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM discount WHERE id = $delete_id";
    if ($conn->query($delete_sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
  }

  $sql = "SELECT * FROM discount";
  $result = mysqli_query($conn, $sql);
  ?>

  <table>
    <tr>
      <th>Discount Name</th>
      <th>Type</th>
      <th>Value</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
    <?php
    if ($result) {
      while ($data = mysqli_fetch_assoc($result)) {
        $id = $data['id'];
        $discount_name = $data['discount_name'];
        $type = $data['type'];
        $value = $data['value'];
        $start_date = $data['start_date'];
        $end_date = $data['end_date'];
        $description = $data['description'];
        ?>
        <tr>
          <td><strong><?php echo $discount_name; ?></strong></td>
          <td><?php echo $type; ?></td>
          <td><?php echo $value; ?></td>
          <td><?php echo $start_date; ?></td>
          <td><?php echo $end_date; ?></td>
          <td><?php echo $description; ?></td>
          <td><a href="?delete_id=<?php echo $id; ?>">Delete</a></td>
        </tr>
        <?php
      }
    }
    ?>
  </table>

  <?php
  $conn->close();
  ?>

