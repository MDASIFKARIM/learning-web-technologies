<?php 

require_once("../Model/personsModel.php");


$username = $_POST['regname'];
$userphone = $_POST['regphone'];
$useremail = $_POST['regemail'];
$password  = $_POST['regpass'];
$repassword =$_POST['regrepass'];

$register = $_POST['register'];

if(isset($register))
{
    if($_POST['regpass'] == $_POST['regrepass'] )
    {

    header("location:../view/Login.php");
    }
}


?>