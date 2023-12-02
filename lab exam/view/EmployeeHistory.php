<?php
require_once('../model/AdminModel.php');


$users = getAllEmployee();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <title>EMPLOYEE History</title>
</head>

<body>
    <form action="../controller/specificParcel.php" method="POST">
        
        <tr>

            <td width="1250px" colspan="2">
                <table border="1" cellspacing="0" align="center" width="1200px" cellpadding="10">

                    <td align="center">EMP ID</td>
                    <td align="center">EMPLOYEE NAME</td>
                    <td align="center">CONTACT NO</td>
                    <td align="center">USER NAME</td>
                    <td align="center">USER PASSSWORD</td>
                    <td align="center" colspan="2">OPERATION</td>

            </td>


            <?php for ($i = 0; $i < count($users); $i++) { ?>
            <tr>

                <td align="center">
                    <?= $users[$i]['EmpID'] ?>
                </td>
                <td align="center">
                    <?= $users[$i]['EmployeeName'] ?>
                </td>
                <td align="center">
                    <?= $users[$i]['ContactNo'] ?>
                </td>
                <td align="center">
                    <?= $users[$i]['UserName'] ?>
                </td>
                <td align="center">
                    <?= $users[$i]['Password'] ?>
                </td>

                <td align="center">
                    <a href="EditEmployee.php?IdEMP=<?php echo $users[$i]['EmpID'] ?>" name="edit"
                        style="color: Green; font-size:22px;"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
                <td align="center"> <a href="DeleteEmployee.php?IdEMP=<?php echo $users[$i]['EmpID'] ?>"" name="delete" style="color: Red; font-size:22px;"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
        <?php } ?>
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