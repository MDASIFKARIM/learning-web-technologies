<?php
    require_once('db.php');

    function login($userid, $userpassword){
        $con = getConnection();
        $sql = "select * from usertable where ID ='{$userid}' and Password ='{$userpassword}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        
        if($count == 1){

            return true;
        

            
        
        }
        else{
            return false;
        }
    }

    function createUser($userid,$password, $username, $role){
        $con = getConnection();
        $sql = " insert into usertable values ('{$userid}','{$password}','{$username}','{$role}');";
        $result = mysqli_query($con, $sql);
        

        if( $result == true){

            echo "User Created";

            header("location: login.php");



        }
        else{
            echo "User can not created";
        }
        


    }

    function getUser($id){
        $con = getConnection();
        $sql = "select * from users where username = '{$id}'";
        $result = mysqli_query($con, $sql);

    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function updateUser($user, $password, $email){
        $con = getConnection();
        $sql = " update demotable set password = '{$password}', email= '{$email}' where username = '{$user}';"; 
        $result = mysqli_query($con, $sql);


    }

    function deleteUser($username){
        $con = getConnection();
        $sql = " Delete from demotable where username = '{$username}';"; 
        $result = mysqli_query($con, $sql);

        if($result == true){

         echo "User has been deleted";
        }

        else{
            echo "User can not be deleted";
        }
    }


?>