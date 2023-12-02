<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Ragistration</title>
</head>
<body>
    <form method="POST" action="../controller/AddEmployeCheck.php">

        <table border="1" cellspacing="0" cellpadding="10" align="center" height="450px" width="400px">
            <tr>
                <td colspan="2" align="center">
                    <h3>Employee Register Panel</h3>
                </td>
            </tr>
            <tr>
                <td>Employee Name</td>
                <td>
                    <input type="text" name="empName" id="empName" >
                </td>
            </tr>
            <tr>
                <td>Contact No</td>
                <td>
                    <input type="number" name="contactNo" id="contactNo">
                </td>
            </tr>
            <tr>
                <td>User Name</td>
                <td>
                    <input type="text" name="userName" id="userName">
                </td>
            </tr>
            <tr>
                <td>User Pass Word</td>
                <td>
                    <input type="text" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Add Employee">
                    <input type="reset" name="reset" value="Reset">
                    <button><a href="AdminDashboard.php">Back</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>