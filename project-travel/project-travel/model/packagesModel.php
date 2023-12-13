<?php
require_once('db.php');

//add package
function add_package($data){
    $conneciton = get_connection();
    $sql = "INSERT INTO package (image_url, destination_name, description, price)
    VALUES ('{$data['image_url']}', '{$data['destination_name']}', '{$data['description']}', {$data['price']})";
    $result = mysqli_query($conneciton, $sql);
    return $result;
}
	

//get all packages data
function get_all_package_data() {
    $connection = get_connection();
    $sql = "SELECT * from package";
    $result = mysqli_query($connection, $sql);
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($data, $row);
    }

    return $data;
}




	

//update package
function update_package($id, $data){
    $conneciton = get_connection();
    $sql = "UPDATE package SET image_url='{$data['image_url']}', destination_name='{$data['destination_name']}', description='{$data['description']}', price={$data['price']} WHERE id = $id";
    $result = mysqli_query($conneciton, $sql);
    if($result){
        return true;
    }else{
        return false;
    }

}


//delete package
function delete_package($id){
    $conneciton = get_connection();
    $sql = "DELETE FROM package WHERE id={$id}";
    $result = mysqli_query($conneciton, $sql);
    if($result){
        return true;
    }else{
        return false;
    }
}


//get package data by id
function get_package_data_by_id($id){
    $conneciton = get_connection();
    $sql = "select * from package where id = {$id}";
    $result = mysqli_query($conneciton, $sql);
    $data = $result->fetch_assoc();
    return $data;
}

function get_booking_data_by_id($id){
    $conneciton = get_connection();
    $sql = "select * from payment where user_id = {$id}";
    $result = mysqli_query($conneciton, $sql);
    $data = $result->fetch_assoc();
    return $data;
}

//get all package data
function get_all_post_data(){
    $conneciton = get_connection();
    $sql = "SELECT * FROM package";
    $result = mysqli_query($conneciton, $sql);
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($data, $row);
    }

    return $data;

}


//count total packages
function count_total_packages(){
    $conneciton = get_connection();
    $sql = "SELECT * FROM package";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);
    return $count;
}
?>
