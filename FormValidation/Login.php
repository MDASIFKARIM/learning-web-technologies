<?php
session_start();
if(isset($_POST['sub']))
{

    if($_POST['uname'] == "" || $_POST['pass']=="")
    {
        echo "Please enter values properly";
    }
   elseif(Ctype_alpha($_POST['uname']) && $_POST['uname'] == '.' || $_POST['uname']=='-'|| $_POST['uname'] == '_' )
   {
        if(strlen($_POST['pass'] >= 8)){
   
    {
        $_SESSION['User'] = $_POST['uname'];
        $Temp = $_SESSION['User'];
        echo "$Temp";
    }
     
        }
        else
        {
            echo "Invalid";
        }
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method ="post">
        <fieldset>
    <legend> LOGIN </legend>

    User Name : <input type ="text" name="uname" value = ""> <br/>
    Password : <input type = "password" name= "pass" value= ""> <br/> <hr>
    
    <input type="checkbox" name="rem"value= "">Remember Me <br/> 
    <input type="submit" name="sub" value="Submit">
    <a href="ForgetPassword.php">Forgot Password?</a>







        </fieldset>

    </form>

    
    
</body>
</html>