<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Information</title>
</head>
<body>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    
    <a href="deskboradadmin.php"><h1>Deskborad</a></h1>


    <h2>Discount </h2>
    <form action="../Controller/process_discount.php" method="post">
        <label for="discount_name">Discount Name:</label>
        <input type="text" id="discount_name" name="discount_name" required><br>

        <label for="type">Type:</label>
        <select id="type" name="type" required>
            <option value="percentage">Percentage</option>
            <option value="fixed">Fixed Amount</option>
        </select><br>

        <label for="value">Value:</label>
        <input type="number" id="value" name="value" required><br>

        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required><br>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>








</html>