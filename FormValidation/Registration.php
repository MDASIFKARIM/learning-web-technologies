<?php
session_start();
if(isset($_POST['sub']))
{
    if($_POST['pass'] != " " && $_POST['cpass'] != " " && $_POST['name'] != " " && $_POST['uname'] != " " && $_POST['mail'] != " " && $_POST['day'] != " " && $_POST['mon'] != " " && $_POST["year"] != " " && isset($_POST['gen']))
    {
        if(($_POST['pass'] == $_POST['cpass']))
        {
        
        $_SESSION["Temp"] = $_POST['name'];
        $_SESSION["User"] = $_POST['uname'];
        $_SESSION['Mail']=$_POST['mail'];
        $_SESSION['Pass'] =$_POST['pass'];
        $_SESSION['cap'] = $_POST['cpass'];
        $_SESSION['Gend'] = $_POST['gen'];
        $_SESSION['Day'] = $_POST['day'];
        $_SESSION['Month'] = $_POST['mon'];
        $_SESSION['Year'] = $_POST['year'];

        header("location: Login.php");

        }
        else if ($_POST['pass'] != $_POST['cpass'])
        {
            echo "Please provide the password correctly";
            return;
        }
    }
    else
    {
        echo "Please fill the form properly";
    }

}


 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<table border="1" width="80%" cellspacing="0" align ="center">
        
         <tr>
            <td colspan="2" height="100px">
                <form method="post">
                    <fieldset>

                    <legend>Registration</legend>
                    Name: <input type="text" name="name" value=""> <br/><hr>
                    Email: <input type="email" name="mail"value= ""><br/><hr>
                    Username: <input type="text" name="uname"value= ""><br/><hr>
                    Password: <input type="password" name="pass"value= ""><br/><hr>
                    Confirm Password: <input type="password" name="cpass"value= ""><br/><hr>
                        <fieldset>
                            <legend> Gender </legend>
                            <input type="radio" name="gen"value= "">Male
                            <input type="radio" name="gen"value= "">Female
                            <input type="radio" name="gen"value= "">Other

                        </fieldset>
                   
                    <hr>

                   
                        <fieldset>
                            <legend> Date of Birth</legend>
          
                        <input type="text" name="day" value="" size= 1 /> / <input type="text" name="mon" value="" size= 1 /> / <input type="text" name="year" value="" size= 1 /> <i>(dd mm yyyy)</i><br/> <hr> 
                        </fieldset>
                    
                    <hr>
                    
                    <input type="submit" name="sub" value="Submit">
                    <input type="reset" name="res" value="Reset">
                    </fieldset>

            </form>
        </td>
         </tr>
         
   
        </table>
    
</body>
</html>