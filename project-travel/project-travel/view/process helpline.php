<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpline Form</title>
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
        input[type="email"],
        textarea {
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
    

<a href="deskboraduser.php"><h1>Deskborad</a></h1>
    <h2>HELPLINE</h2>
    <form action="../Controller/helpline.php" method="post">
        <label for="contact_name">Contact Name:</label>
        <input type="text" name="contact_name" required><br>

        <label for="contact_number">Contact Number:</label>
        <input type="text" name="contact_number" required><br>

        <label for="email_address">Email Address:</label>
        <input type="email" name="email_address" required><br>

        <label for="purpose">Purpose:</label>
        <textarea name="purpose" rows="4" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>





</html>