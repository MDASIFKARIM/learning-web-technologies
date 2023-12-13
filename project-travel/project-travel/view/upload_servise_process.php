<html>
<html>
<head>
    <title>Upload Photo</title>
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

        input[type="file"],
        input[type="text"],
        button {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

<a href="../View/deskboradadmin.php"><h1>Deskborad</a></h1>

    <h1>Upload Your Photo</h1>
    <form action="../Controller/upload_servise.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" accept="image/*" required>
        <input type="text" name="description" placeholder="Description" required>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>


</html>
