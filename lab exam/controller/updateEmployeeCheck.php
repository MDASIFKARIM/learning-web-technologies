<?php
require_once('../model/AdminModel.php');

if (isset($_POST['edit_btn'])) {

    if (isset($_POST['EmpID']) && isset($_POST['newName']) && isset($_POST['newNumber']) && isset($_POST['newUserName']) && isset($_POST['newPassword']))
    {
        
        $EmpID = $_POST['EmpID'];
        $empName = $_POST['newName'];
        $contactNo = $_POST['newNumber'];
        $userName = $_POST['newUserName'];
        $password = $_POST['newPassword'];

        updateUser($EmpID,$empName, $contactNo, $userName, $password);
    }
} else {
    echo 'Invlaid';
}

?>