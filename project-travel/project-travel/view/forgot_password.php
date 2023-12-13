<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/forgetpassword.css">
    <title>Forgot Password</title>
    
</head>

<body class="backGround center">

    <center>
        <h1>Forgot Password</h1>
        <div class="form-container">
            
            <form name="forgotPasswordForm" onsubmit="forgotPassword(event)">
                <!-- Email -->
                <label for="email">Email*</label><br>
                <input type="email" name="email" id="email"><br>
                <!-- New Password -->
                <label for="password">New Password*</label><br>
                <input type="password" name="password" id="password"><br>
                <!-- Confirm New Password -->
                <label for="cpassword">Confirm Password*</label><br>
                <input type="password" name="cpassword" id="cpassword"><br>
                <input type="submit" value="Change Password"><br>
            </form>

            <p class="a">
                <a href="../view/login.php">Login</a><br>
                <a href="../view/registration.php">Sign Up</a>
            </p>
        </div>
        <div id="show_message"></div>
    </center>

    <script>
        function forgotPassword(event) {
            event.preventDefault();

            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            let cpassword = document.getElementById('cpassword').value;

            let error = '';
            if (email === '') {
                error += 'Please enter your email.<br>';
            }
            if (password === '') {
                error += 'Please enter your password.<br>';
            }
            if (cpassword === '') {
                error += 'Please confirm your password.<br>';
            }
            if (password !== cpassword) {
                error += 'Passwords do not match.<br>';
            }

            document.getElementById('show_message').innerHTML = error;

            if (!error) {
                let formData = new FormData();
                formData.append('email', email);
                formData.append('password', password);
                formData.append('cpassword', cpassword);

                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../controller/forget_password_controller.php', true);
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('show_message').innerHTML = this.responseText;

                        document.getElementById('email').value = '';
                        document.getElementById('password').value = '';
                        document.getElementById('cpassword').value = '';
                    }
                };
                xhttp.send(formData);
            }
        }
    </script>

</body>

</html>
