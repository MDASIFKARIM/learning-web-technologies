<?php 

require_once("../Model/dbmodel.php");
session_start();

function login($useremail, $userpassword) //TO Login  || work done on 23/11/23.
{
    $con = getConnection();
    $sql = "select * from persons where Email ='{$useremail}' and Password='{$userpassword}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $_SESSION['EmailTracker'] = $useremail;
    $_SESSION['RowPicker'] = $row;
    if($result)
    {

        return true;
    }
}

function getSpeceficPerson($email) //TO View Deliveryman || work done on 23/11/23.
{
    $con = getConnection();
    $sql = "select * from persons where Email = '{$email}'";
    $result = mysqli_query($con, $sql);
    $persons = [];
    while ($row = mysqli_fetch_array($result)) {
        
        $_SESSION['Username'] = $row['Name'];
        $_SESSION['UserEmail'] = $row['Email'];
        $_SESSION['UserPhoneno'] = $row['PhoneNumber'];
        $_SESSION['UserPass'] = $row['Password'];
        
        array_push($persons, $row);
    }
    return $persons;
}

function searchspecificPerson($email)
{
    $con = getConnection();
    $sql = "select * from persons where Email = '{$email}'";
    $result = mysqli_query($con, $sql);

    if($result == true)
    {
        return true;
    }

    else
    {
        return false;
    }
}















?>