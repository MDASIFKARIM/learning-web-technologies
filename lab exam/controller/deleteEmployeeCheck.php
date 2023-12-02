<?php
require_once('../model/AdminModel.php');

if (isset($_POST['edit_btn'])) {

    if (isset($_POST['EmpID']))
    {
        
        $EmpID = $_POST['EmpID'];

        deleteEmployee($EmpID);
    }
} else {
    echo 'Invlaid';
}

?>