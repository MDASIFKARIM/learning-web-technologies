<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/signup.css">
    <title>Sign Up</title>
</head>

<body class="backGround center">

    <center>
        <h1>Sign Up</h1>
        <div class="form-container">
            <form name="registrationForm" action="" method="POST" onsubmit="signUp(event)">
                <!-- Name -->
                <label for="name">Name*</label><br>
                <input type="text" name="name" id="name"><br>
                <span id="nameError" class="error"></span><br> <!-- Display error message -->

                <!-- Email -->
                <label for="email">Email*</label><br>
                <input type="email" name="email" id="email"><br>
                
                <!-- NID -->
                <label for="nid">NID</label><br>
                <input type="text" name="nid" id="nid"><br>

                <!-- Age -->
                <label for="age">Age</label><br>
                <input type="text" name="age" id="age"><br>

                <!-- Contact -->
                <label for="contact">Contact*</label><br>
                <input type="text" name="contact" id="contact"><br>

                <!-- Password -->
                <label for="password">Password*</label><br>
                <input type="password" name="password" id="password"><br>

                <!-- Confirm Password -->
                <label for="cpassword">Confirm Password*</label><br>
                <input type="password" name="cpassword" id="cpassword"><br>

                <div>
                    <input type="submit" value="Sign Up" name="submit" />
                </div>

                <p class="a">
                    <a href="../view/login.php">Login</a><br>
                    <a href="../view/forgot_password.php">Forget Password</a>
                </p>
            </form>
        </div>
        <div id="show_message"></div> 

       
    </center>

    

<script>
    function signUp(event) {
        event.preventDefault();

        // Retrieve form data
        let name = document.getElementById('name').value;
        let contact = document.getElementById('contact').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let cpassword = document.getElementById('cpassword').value;
        let nid = document.getElementById('nid').value;
        let age = document.getElementById('age').value;

        
        let error = '';
        if (name === '') {
            error += 'Please enter your name.<br>';
        }
        
        if (contact === '') {
            error += 'Please enter your contact.<br>';
        } 

        if (email === '') {
            error += 'Please enter your email.<br>';
        } 
        if (password === '') {
            error += 'Please enter your password.<br>';
        } 
        if (nid === '') {
            error += 'Please enter your nid.<br>';
        } 
        if (age === '') {
            error += 'Please enter your age.<br>';
        } 
        if (cpassword === '') {
            error += 'Please enter your cpassword.<br>';
        } 

        
        document.getElementById('show_message').innerHTML = error;

        if (!error) {
            
            let formData = new FormData();
            formData.append('name', name);
            formData.append('contact', contact);
            formData.append('email', email);
            formData.append('password', password);
            formData.append('cpassword', cpassword);
            formData.append('nid', nid);
            formData.append('age', age);

            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../controller/signup_controller.php', true);
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('show_message').innerHTML = this.responseText;

                    
                    document.getElementById('name').value = '';
                    document.getElementById('contact').value = '';
                    document.getElementById('email').value = '';
                    document.getElementById('password').value = '';
                    document.getElementById('cpassword').value = '';
                    document.getElementById('nid').value = '';
                    document.getElementById('age').value = '';
                }
            };
            xhttp.send(formData);
        }
    }
</script>

</body>

</html>
