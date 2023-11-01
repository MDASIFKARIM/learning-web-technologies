<?php 

session_start();
require_once("UserDb.php");

$_SESSION['ID']= $_POST['userid'];
$_SESSION['userpass']= $_POST['pass'];

$userid = $_SESSION['ID'];
$userpassword = $_SESSION['userpass'];


if(isset($_POST['but'])){
    if($userid!= "" && $userpassword != "")
    {   
        $status = login($userid, $userpassword);
        if($status)
        {
          
            header("location: user_home.php");
        }
        else
        {
            echo "invalid";
        }
    }
    else 
    {

        echo "Please fill out the data properly!"; 




    }

}


?>
