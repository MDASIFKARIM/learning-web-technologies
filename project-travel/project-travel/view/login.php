<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Log In</title>
</head>

<body class="backGround center">

    <center>
        <h1>Good To See you Again</h1>
        <div class="form-container">
            <form action="../controller/login_controller.php" method="post" onsubmit="return validateForm()" novalidate>
                
                <label for="email">Email*</label><br>
                <input type="email" name="email" id="email"><br>
                
                <label for="password">Password*</label><br>
                <input type="password" name="password" id="password"><br>
                <input type="submit" value="Login"><br>
            </form>
            <p class="a">
                <span>Need an account?</span> <a href="../view/registration.php">Sign Up</a><br>
                <a href="../view/forgot_password.php">Forget Password</a>
            </p>
        </div>
    </center>

    <script>
        function validateForm() {
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            let error = '';

            if (email.trim() === '') {
                error += 'Please enter your email.\n';
            }
            if (password.trim() === '') {
                error += 'Please enter your password.\n';
            }

            if (error !== '') {
                alert(error);
                return false;
            }
            return true;
        }
    </script>

</body>

</html>
