<?php
     include_once('../model/usersModel.php');
    $currentUserId = get_current_user_type();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <title>Navbar</title>

</head>

<body class="">

    <header>
        <nav>
            <ul>
            
                <li><a href="index.php">Home</a></li>
                <li><a href="packages.php">Packages</a></li>
                <?php if($currentUserId == "User"): ?>
                    <li><a href="deskboraduser.php">Dashboard</a></li>
                    <li><a href="../controller/logout.php">Logout</a></li>
                <?php elseif ($currentUserId == "Admin"): ?>
                    <li><a href="deskboradadmin.php">Admin Panel</a></li>
                    <li><a href="../controller/logout.php">Logout</a></li>
                    <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <hr>
</body>

</html>
