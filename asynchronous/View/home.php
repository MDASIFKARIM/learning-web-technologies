<?php
require_once("../Model/personsModel.php");

$persons_flag = getSpeceficPerson($_SESSION['EmailTracker']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form method="post" action="../Controller/logoutchek.php">
    <table border="1">
        <?php for ($i = 0; $i < count($persons_flag); $i++) { ?>
            <tr>
                <td align="center">
                    <?= $persons_flag[$i]['Name'] ?>
                </td>
                <td align="center">
                    <?= $persons_flag[$i]['PhoneNumber'] ?>
                </td>
                <td align="center">
                    <?= $persons_flag[$i]['Email'] ?>
                </td>
                <td align="center">
                    <?= $persons_flag[$i]['Password'] ?>
                </td>
            </tr>

            <tr>
                <td>
                <a href="../Controller/logoutchek.php"> Log out</a>
                </td>
            </tr>
        <?php } ?>

        </form>
    </table>
</body>
</html>
