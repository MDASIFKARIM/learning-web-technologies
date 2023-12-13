
<html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        fieldset {
            border: 2px solid #ccc;
            margin: 20px auto;
            padding: 20px;
            width: 80%;
            max-width: 600px;
            background-color: white;
        }

        legend {
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            color: #333;
        }

        nav {
            text-align: center;
        }

        nav a {
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            border: 2px solid #333;
            border-radius: 5px;
            background-color: #ddd;
            color: #333;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        nav a:hover {
            background-color: #333;
            color: white;
        }

        .home-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #3498db;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.home-button:hover {
  background-color: #2980b9;
}
    </style>
</head>
<body>
    <header>
        <h1>Welcome Tour & Travel</h1>
    </header>
    <fieldset>
        <legend>DESKBOARD ADMIN</legend>
        <nav>
        <a href="add_package.php">Add Package</a>
            <a href="process_discount.php">Discount</a>
            <a href="../Controller/delete_discount.php">Delete Discount</a>
            <a href="process_invoice.php">Invoice</a>
            <a href="../Controller/delete_invoice.php">delete_invoice</a>
            <a href="../Controller/review information admin.php">review information</a>
            <a href="../Controller/delete_review.php">delete_review</a>
            <a href="../Controller/reply helpline.php">reply helpline</a>
            <a href="upload_servise_process.php">upload_servise_process</a>
            <a href="../Controller/delete_servise.php">delete_servise</a>
            <br>
            <a class="home-button" href="index.php">Back To Home</a>
        </nav>
    </fieldset>
</body>
</html>

