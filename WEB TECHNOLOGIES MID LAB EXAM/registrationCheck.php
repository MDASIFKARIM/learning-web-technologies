<?php
session_start();

require_once("UserDb.php");

$id = $_POST['uid'];
$password = $_POST['upass'];
$_SESSION['conpass'] = $_POST['cpass'];
$confirmPassword = $_SESSION['conpass'];
$name = $_POST['uname'];
$role = $_POST['type'];


if(isset($_POST['submit']))
{
    if($id != "" && $password != "" && $confirmPassword != " " && $name != "" && $role != ""){
        
         if($password == $confirmPassword)
         {
            createUser($id, $password, $name, $role);
         }
    
    }

    elseif($password != $confirmPassword)
    {
        echo "Please provide password properly";
    }

    else
    {
        echo "Please fill the data properly";
    }    
}






?>