<?php
require_once('db.php');


function user_login($username, $password){
    $conneciton = get_connection();
    $sql = "SELECT * FROM users WHERE user_name = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}
//get current user
function get_current_user_id(){
    session_start();
    $session_email = '';

    if(isset($_SESSION['email'])){
        $session_email = $_SESSION['email'];
    }

    $conneciton = get_connection();
    $sql = "SELECT id FROM users WHERE email = '{$session_email}'";
    $result = mysqli_query($conneciton, $sql);
    $data = $result->fetch_assoc();
    return $data['id'];
}

function get_current_user_type() {
    session_start();
    $email = '';

    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
    }

    $connection = get_connection();
    if($connection) {
        $sql = "SELECT id,type FROM users WHERE email = '{$email}'";
        $result = mysqli_query($connection, $sql);
        
        if($result && $result->num_rows > 0) {
            $data = $result->fetch_assoc();
            return $data['type']; // Return the user type if found
        } else {
            // Handle case where no data was found or the query failed
            return 'User Type Not Found';
        }
    } else {
        // Handle case where connection fails
        return 'Connection Error';
    }
}



function get_all_users(){


}

function get_user($id){


}

function create_user($user_data){
    $conneciton = get_connection();
    $sql = "INSERT INTO users (user_name, full_name, email, gender, date_of_birth, password, user_type)
    VALUES ('{$user_data['user_name']}', '{$user_data['full_name']}', '{$user_data['email']}', '{$user_data['gender']}', '{$user_data['date_of_birth']}', '{$user_data['password']}', '{$user_data['user_type']}')";
    $result = mysqli_query($conneciton, $sql);
    return $result;
}

function update_user($id){


}

function delete_user($id){


}
//update using token
function update_password_by_token($new_password, $token){
    $conneciton = get_connection();
    $sql = "UPDATE users SET password = '{$new_password}' WHERE reset_token = $token";
    $result = mysqli_query($conneciton, $sql);
    if($result){
        return true; 
    }else{
        return false;
    }
}
//update token for password reset
function update_token($email, $token){
    $conneciton = get_connection();
    $sql = "UPDATE users SET reset_token = ".$token." WHERE email = '{$email}'";
    $result = mysqli_query($conneciton, $sql);
    if($result){
        return true; 
    }else{
        return false;
    }
}
//check reset token
function check_reset_token($token){
    $conneciton = get_connection();
    $sql = "SELECT reset_token FROM users WHERE reset_token = $token";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        return true;
    }else{
        return false;
    }
}
//check whether email exists or not
function check_user_email($email){
    $conneciton = get_connection();
    $sql = "SELECT email FROM users WHERE email = '{$email}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        return true;
    }else{
        return false;
    }
}
//get user type by user name
function get_user_type($username){
    $conneciton = get_connection();
    $sql = "SELECT user_type FROM users WHERE user_name = '{$username}'";
    $result = mysqli_query($conneciton, $sql);
    return $result;
    
}
//check whether username already exists
function user_name_exists($username){

    $conneciton = get_connection();
    $sql = "SELECT user_name FROM users WHERE user_name = '{$username}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        return true;
    }else{
        return false;
    }

}
//get user data by username
function get_current_user_info(){
    session_start();
    $email = '';

    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
    }
    $conneciton = get_connection();
    $sql = "SELECT * FROM users WHERE email = '{$email}'";
    $result = mysqli_query($conneciton, $sql);
    $user_data = $result->fetch_assoc();
    return $user_data;
}

function login($email, $password){
    $con = get_connection();
    $sql = "select * from users where email='{$email}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    
    if(count($user) > 0){
        return true;
    }else{
        return false;
    }
}

function signup($name, $contact, $email, $password, $nid, $age)
{
$con = get_connection();
$name = mysqli_real_escape_string($con, $name);
$contact = mysqli_real_escape_string($con, $contact);
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$nid = mysqli_real_escape_string($con, $nid);
$age = mysqli_real_escape_string($con, $age);
$type = "User";

$sql = "INSERT INTO users (name, contact, email, password, nid, age,type) VALUES ('{$name}', '{$contact}', '{$email}', '{$password}', '{$nid}', '{$age}','{$type}')";
$result = mysqli_query($con, $sql);

if ($result) {
    return true;
} else {
    return false;
}
}

function getUser($id){
        $con = get_connection();
        $id = mysqli_real_escape_string($con, $id);
        $sql = "SELECT * FROM users WHERE id = {$id}";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
}

function getUserByEmail($email) {
    $con = get_connection();
    $email = mysqli_real_escape_string($con, $email);
    $sql = "SELECT * FROM users WHERE email = '{$email}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}



function getUserTypeByEmail($email) {
    $con = get_connection();
    $email = mysqli_real_escape_string($con, $email);
    $sql = "SELECT type FROM users WHERE email = '{$email}'";
    $result = mysqli_query($con, $sql);
    $userType = mysqli_fetch_assoc($result);
    return $userType['type'];
}

function adduser(){

}

function deleteUser(){
    $con = get_connection();
$id = mysqli_real_escape_string($con, $id);

$sql = "DELETE FROM users WHERE id = {$id}";
$result = mysqli_query($con, $sql);

if ($result) {
    return true;
} else {
    return false;
}
}

function updateUser(){
    $con = get_connection();
    $id = mysqli_real_escape_string($con, $id);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
    $email = mysqli_real_escape_string($con, $email);

    $sql = "UPDATE users SET username='{$username}', password='{$password}', email='{$email}' WHERE id={$id}";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        return true;
    } else {
        return false;
    }
}


function forgotPassword($email, $newPassword)
{
$con = get_connection();
$email = mysqli_real_escape_string($con, $email);
$newPassword = mysqli_real_escape_string($con, $newPassword);

// Check user is exists or not
$sql = "SELECT * FROM users WHERE email='{$email}'";
$result = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($result);

if ($user) {
    // Update the user's password with the new password
    $userId = $user['id'];
    $sql = "UPDATE users SET password='{$newPassword}' WHERE id={$userId}";
    $updateResult = mysqli_query($con, $sql);

    if ($updateResult) {
        return true; //reset successful
    }
}

return false; // reset failed
}

//payment processing 

function processPayment($currentUserId, $packageId, $fullName, $address, $city, $zipCode, $payAmount, $paymentMethod, $transactionID) {
    $con = get_connection();

    $currentUserId = mysqli_real_escape_string($con, $currentUserId);
    $packageId = mysqli_real_escape_string($con, $packageId);
    $fullName = mysqli_real_escape_string($con, $fullName);
    $address = mysqli_real_escape_string($con, $address);
    $city = mysqli_real_escape_string($con, $city);
    $zipCode = mysqli_real_escape_string($con, $zipCode);
    $payAmount = mysqli_real_escape_string($con, $payAmount);
    $paymentMethod = mysqli_real_escape_string($con, $paymentMethod);
    $transactionID = mysqli_real_escape_string($con, $transactionID);

    $sql = "INSERT INTO payment (user_id, package_id, full_name, address, city, zip_code, pay_amount, payment_method, transaction_id) 
            VALUES ('{$currentUserId}', '{$packageId}', '{$fullName}', '{$address}', '{$city}', '{$zipCode}', '{$payAmount}', '{$paymentMethod}', '{$transactionID}')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}






function billing($full_name, $address, $city, $zip_code)
{
$con = get_connection();
$full_name = mysqli_real_escape_string($con, $full_name);
$address = mysqli_real_escape_string($con, $address);
$city = mysqli_real_escape_string($con, $city);
$zip_code = mysqli_real_escape_string($con, $zip_code);

$sql = "INSERT INTO billing_info (full_name, address, city, zip_code) VALUES ('{$full_name}', '{$address}', '{$city}', '{$zip_code}')";
$result = mysqli_query($con, $sql);

if ($result) {
    return true;
} else {
    return false;
}
}


?>