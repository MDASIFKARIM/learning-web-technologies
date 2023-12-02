<?php
require_once('../model/AdminModel.php');

$EmpID = $_GET['IdEMP'];
$users = getSpecificUser($EmpID);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <title>Edit User Information</title>
</head>

<body>
    <form action="../controller/updateEmployeeCheck.php" method="POST">
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="400px">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="#">Notifications</a> |
                    <a href="../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">Edit PARCEL</td>
            </tr>
            <tr>

                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center" width="1200px" cellpadding="10">

                        <td align="center">EMP ID</td>
                        <td align="center">EMPLOYEE NAME</td>
                        <td align="center">CONTACT NO</td>
                        <td align="center">USER NAME</td>
                        <td align="center">USER PASSSWORD</td>
                </td>


                <?php for ($i = 0; $i < count($users); $i++) { ?>
                <tr>

                    <td align="center">
                        <input type="text" name="EmpID" id="" value="<?= $users[$i]['EmpID'] ?>" readonly>
                    </td>
                    <td align="center">
                        <input type="text" name="newName" id="" value="<?= $users[$i]['EmployeeName'] ?>">
                    </td>
                    <td align="center">
                        <input type="number" name="newNumber" id="" value="<?= $users[$i]['ContactNo'] ?>">
                    </td>
                    <td align="center">
                        <input type="text" name="newUserName" id="" value=" <?= $users[$i]['UserName'] ?>">
                    </td>
                    <td align="center">
                        <input type="text" name="newPassword" id="" value="<?= $users[$i]['Password'] ?>">
                    </td>
                </tr>
            <?php } ?>
            </td>
            </tr>
            <tr>
                <td colspan="9" align="center">
                    <input type="submit" name="edit_btn" value="UPDATE DATA">
                </td>
            </tr>
        </table>
        <br><br>
        <table align="center" border="a" cellspacing="0" cellpadding="5">
            <tr>
                <td align="center">
                    <a href="AdminDashboard.php">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>