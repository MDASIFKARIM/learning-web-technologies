<?php
if(isset($_POST['sub']))
{
     $currentpass =$_POST['cpass'];
     $newpass = $_POST['npass'];
     $repass = $_POST['rpass'];
    if($currentpass == $newpass)
    {
        echo "please provide the password correctly it can not be same as previous password"; 
    }
    elseif($currentpass != $newpass && $newpass == $repass)
    {
        echo "successfully changed the password";
    }

    else
    {
        echo "Invalid";
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
    <legend> CHANGE PASSWORD </legend>

    Cureent Password : <input type ="password" name="cpass" value = ""> <br/>
    New password : <input type = "password" name= "npass" value= ""> <br/> 
    Retype New password : <input type = "password" name= "rpass" value= ""> <br/> <hr>
    
    <input type="submit" name="sub" value="Submit">
   







        </fieldset>

    </form>

    
    
</body>
</html>