<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Form</title>
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
        select,
        textarea {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
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

    <h2>Review</h2>
    <form action="../Controller/Review.php" method="post">
        <label for="reviewerName">Reviewer Name:</label>
        <input type="text" id="reviewerName" name="reviewerName" required><br>

        <label for="rating">Rating:</label>
        <select id="rating" name="rating" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br>

        <label for="reviewTitle">Review Title:</label>
        <input type="text" id="reviewTitle" name="reviewTitle" required><br>

        <label for="reviewContent">Review Content:</label><br>
        <textarea id="reviewContent" name="reviewContent" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Submit Review">
    </form>
</body>





</html>