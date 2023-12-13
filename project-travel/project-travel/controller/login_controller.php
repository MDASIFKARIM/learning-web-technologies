<?php
    require_once('../model/usersModel.php');

    session_start();
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    
    if ($email == "" || $password == "") {
        echo "Please enter a username or password!";
    } else {
        $user = getUserByEmail($email); // Fetch user data by email
    
        if ($user) {
            
            $userType = $user['type'];
            if ($userType === 'Admin') {
                // If User is an admin
                $_SESSION['isAdmin'] = true;
                $_SESSION['flag'] = 'true';
                $_SESSION['email'] = $email;
                setcookie('flag', 'true', time()+3600, '/');
                header('location: ../view/index.php');
            } else {
                // If User is not an admin
                $_SESSION['isAdmin'] = false;
                $_SESSION['flag'] = 'true';
                $_SESSION['email'] = $email;
                setcookie('flag', 'true', time()+3600, '/');
                header('location: ../view/index.php');
            }
            
        } else {
            echo "Invalid user!";
            header('location: ../view/login.php');
        }
    }
    
    
    
?>