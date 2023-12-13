<html>
<html lang="en">
<a href="../View/deskboraduser.php"><h1>Deskborad</a></h1>
<head><fieldset>
  <meta charset="UTF-8">
  <title>Discounts</title>
  
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
  <?php
  
  $hostname = 'localhost';
  $username = 'root';
  $password = ''; 
  $dbname = 'travel-tour';
  $conn = new mysqli($hostname, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
    </tr>
    <?php
    if ($result) {
      while ($data = mysqli_fetch_assoc($result)) {
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
        </tr>
        <?php
      }
    }
    ?>
  </table>

  <?php
  
  $conn->close();
  ?>
  </fieldset>
</body>
</html>
