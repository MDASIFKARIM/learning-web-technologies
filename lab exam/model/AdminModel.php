<?php
require_once('dbModel.php');

function addEmployee($empName, $contactNo, $userName, $password)
{
    $con = getConnection(); // unique id generation 
    $query_id = "SELECT * FROM employeeinfo ORDER BY EmpID DESC LIMIT 1";
    $result_id = mysqli_query($con, $query_id);

    if (!$result_id) {
        die("Error in query: " . mysqli_error($con));
    }

    $row_id = mysqli_fetch_assoc($result_id);

    if (!$row_id || empty($row_id["EmpID"])) {
        $new_unique_id = "EMP1";
    } else {
        $old_id = $row_id["EmpID"];
        $last_number = intval(substr($old_id, 3));

        do {
            $last_number++;
            $new_unique_id = "EMP" . $last_number;
            $check_query = "SELECT EmpID FROM employeeinfo WHERE EmpID = '$new_unique_id'";
            $check_result = mysqli_query($con, $check_query);
            $exists = mysqli_fetch_assoc($check_result);
        } while ($exists);

    }

    $sql = " insert into employeeinfo values ( '{$new_unique_id}','{$empName}','{$contactNo}','{$userName}','{$password}')";
    $result = mysqli_query($con, $sql);

    if ($result == true) {
        header("location: ../view/EmployeeHistory.php");
    } else {
        echo "User can not created";
    }
}



function getAllEmployee() 
{
    $con = getConnection();
    $sql = "select * from employeeinfo";
    $result = mysqli_query($con, $sql);
    $employee = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($employee, $row);

    }
    return $employee;
}

function getSpecificUser($id)
{
    $con = getConnection();
    $sql = "select * from employeeinfo where EmpID = '$id'";
    $result = mysqli_query($con, $sql);
    $history = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($history, $row);
    }
    return $history;
}


function deleteEmployee($EmpID)
{
    
    $con = getConnection();
    $sql = "DELETE FROM employeeinfo WHERE EmpID ='{$EmpID}';";
    $result = mysqli_query($con, $sql);
    $deleteUser = [];
    if ($result == true){
        header('location: ../view/EmployeeHistory.php');
    }
    return $deleteUser;
}


function updateUser($EmpID,$empName, $contactNo, $userName, $password)
{
    $con = getConnection();
    $sql = " UPDATE employeeinfo set EmployeeName = '{$empName}', ContactNo = '{$contactNo}', UserName ='{$userName}', Password = '{$password}' where EmpID = '$EmpID';";
    
    if (mysqli_query($con, $sql)) 
    {   
        header('location: ../view/EmployeeHistory.php');
        return true;
    }
}

?>