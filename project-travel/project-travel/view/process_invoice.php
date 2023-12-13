<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Form</title>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1, h2 {
            text-align: center;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        select,
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>  
<a href="deskboradadmin.php"><h1>Deskborad</a></h1>


    

    <form action="../Controller/invoice.php" method="post">
        <label for="invoice_number">Invoice Number:</label>
        <input type="text" name="invoice_number" required><br>

        <label for="booking_reference">Booking Reference:</label>
        <input type="text" name="booking_reference" required><br>

        <label for="total_amount">Total Amount:</label>
        <input type="number" step="0.01" name="total_amount" required><br>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="paid">Paid</option>
            <option value="unpaid">Unpaid</option>
        </select><br>

        <label for="issue_date">Issue Date:</label>
        <input type="date" name="issue_date" required><br>

        <input type="submit" value="Submit Invoice">

        
    </form>
</body>





</html>