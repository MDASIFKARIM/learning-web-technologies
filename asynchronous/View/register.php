<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../Asset/ajax.js"></script>
    <title>Registration</title>
</head>
<body>
<form method="post"  action="../Controller/regcheck.php">
    <fieldset>
<table border="1">

Name: <input type="text" name="regname" id="rname"> <span id="EmailTracker" style="color: red;"> Not Matched</span><br>
 Phone Number :<input type="number" name="regphone" id="rphone"><br>
 Email :<input type="email" name="regemail" id="remail"><br>
Password :<input type="text" name="regpass" id="rpass"><br>
 RePassword :<input type="text" name="regrepass" id="rrepass"><br>

<button type="submit" name="register" onclick="ajax()">Register</button>

</fieldset>

</table>
</form>  
</body>
</html>