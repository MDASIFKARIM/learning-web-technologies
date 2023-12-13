<?php
    session_start();

    $userName = isset($_SESSION['email']) ? $_SESSION['email'] : 'Guest'; // Change 'Guest' to your default if user not logged in

    
    $page_title = 'All Packages'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>

    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header-backend {
            background-color: #333;
            color: white;
            padding: 10px 0;
        }
        .layout-container {
            width: 80%;
            margin: 0 auto;
        }
        .layout-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo-area h2 {
            margin: 0;
        }
        .menu-area {
            text-align: right;
        }
        .menu-area strong {
            font-weight: bold;
        }
        .menu-area a {
            color: white;
            text-decoration: none;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<header class="header-backend">
    <div class="layout-container">
        <div class="layout-row">
            <div class="logo-area">
                <h2>Tour and Travels</h2>
            </div>
            <div class="menu-area">
                Welcome back! <strong><?php echo $userName; ?></strong>
                | <a href="../controller/logout.php">Logout</a>
            </div>
        </div>
    </div>
</header>
