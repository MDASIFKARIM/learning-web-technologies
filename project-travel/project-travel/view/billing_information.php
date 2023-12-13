<?php
    require_once('../model/packagesModel.php');
    $packageId = isset($_GET['package_id']) ? $_GET['package_id'] : '';

    $package = get_package_data_by_id($packageId);
    $payAmount = ($package) ? $package['price'] : 0;
    
    if ($package) {
        $img = $package['image_url'];
        $packageName = $package['destination_name'];
        $price = $package['price'];
        // Add more details as needed
    }

    require_once('../model/usersModel.php');
    $currentUserId = get_current_user_id();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="../assets/css/billing.css"> <!-- Include your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
        .left-column {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .right-column {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .left-column img {
            width: 100%;
            max-width: 300px;
            height: auto;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .payment-container {
            margin-top: 20px;
        }
        .payment-form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
        .payment-form h3 {
            margin-bottom: 15px;
            text-align: center;
        }
        .payment-form label {
            display: block;
            margin-bottom: 5px;
        }
        .payment-form input[type="text"],
        .payment-form select {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .payment-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .payment-form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-column">
            <?php if ($package) : ?>
                <!-- Show package information here -->
                <h3>Package Information</h3>
                <img width="300px" src="<?php echo $img; ?>" alt="">
                <p>Package Name: <?php echo $packageName; ?></p>
                <p>Price: $<?php echo $price; ?></p>
                <!-- Add more package details here -->
            <?php else : ?>
                <p>No package found</p>
            <?php endif; ?>
        </div>
        <div class="right-column">


            <div class="payment-container">
        <div class="payment-form">
        <h3>Payment</h3>
<form action="../controller/payment_controller.php" method="post">
    <input type="hidden" name="package_id" value="<?php echo $packageId; ?>">
    <input type="hidden" name="user_id" value="<?php echo $currentUserId; ?>">

            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name">
            <br>
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
            <br>
            <label for="city">City</label>
            <input type="text" name="city" id="city">
            <br>
            <label for="zip_code">Zip Code</label>
            <input type="text" name="zip_code" id="zip_code">
            <br>
                <label for="pay_amount">Pay Amount</label>
                <input type="text" name="pay_amount" id="pay_amount" value="<?php echo $payAmount; ?>" readonly>
                
                <label for="payment_method">Choose Payment Method</label>
                <select name="payment_method" id="payment_method">
                    <option value="Bkash">Bkash</option>
                    <option value="Nagad">Nagad</option>
                    <option value="Rocket">Rocket</option>
                </select>
                
                <label for="transaction_id">Transaction ID</label>
                <input type="text" name="transaction_id" id="transaction_id" >
                
                <input type="submit" value="Submit">
</form>
        </div>
    </div>
        </div>
    </div>
</body>
</html>
