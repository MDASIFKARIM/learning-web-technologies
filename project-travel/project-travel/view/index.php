

<?php
//requring files
require_once('../model/packagesModel.php');
$package =  get_all_package_data();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WanderLuxe Tours - Home</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        header {
            background-color: #f5f5f5;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        .package-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            width: 300px;
            text-align: center;
            display: inline-block;
        }
        .custom-button {
  display: inline-block;
  margin: 10px;
  padding: 8px 16px;
  font-size: 16px;
  font-weight: bold;
  text-decoration: none;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.custom-button a {
  color: inherit;
  text-decoration: none;
}

.custom-button:hover {
  background-color: #0056b3;
}

    </style>
</head>
<body>

<?php require "nav_view.php" ?>

    <main>
        <section>
            <h1>Welcome to WanderLuxe Tours</h1>
            <!-- Package Cards -->
            <?php foreach ($package as $single_package): ?>
            <div class="package-card">
                <img width="300px" src="<?php echo $single_package['image_url']; ?>" alt="">
                <h2><?php echo $single_package['destination_name']; ?></h2>
                <p><?php echo $single_package['description']; ?></p>
                <a class="custom-button" href="billing_information.php?package_id=<?php echo $single_package['id']; ?>">Book Now</a>


            </div>
        <?php endforeach; ?>
        </section>
    </main>

</body>
</html>
