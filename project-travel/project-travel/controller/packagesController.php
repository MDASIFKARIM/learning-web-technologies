<?php
require_once('../model/packagesModel.php');


if(isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
}

if($action == 'add_package'){
    $error_message = '';

 
    $image_url = $_FILES['image_url'];
    $destination_name = $_REQUEST['destination_name'];
    $description = $_REQUEST['description'];
    $price = $_REQUEST['price'];
    
 
 
    if($image_url == ''){
        $error_message .= "<p class='error_msg'>Your must fill Image! </p>";
    }else if($destination_name == ''){
        $error_message .= "<p class='error_msg'>Your must fill Destination! </p>";
    }else if($description == ''){
        $error_message .= "<p class='error_msg'>Your must fill description! </p>";
    }else if($price == ''){
        $error_message .= "<p class='error_msg'>Your must fill price! </p>";
    }

 
    // file info
    $source = $image_url['tmp_name'];
    $destination = '../assets/image/package/'.$image_url['name'];
 

    //data array
    $data = [
     'image_url' => $destination,
     'destination_name' => $destination_name,
     'description' => $description,
     'price' => $price
     
 
     ];
 

 
     if($error_message === ''){
 
         $result = add_package($data);
     
         if($result === true){
             
             if (!file_exists($destination)) {
                 if(move_uploaded_file($source, $destination)){
                 }
             }
             echo "<p class='success_msg'>Package added successfully!</p>";
         }elseif ($result === false) {
             echo "<p class='success_msg'>Package add failed!</p>";
         }
         
        }else{
            echo $error_message;
        }
}


  //current data in udpate field
  if($action == 'current_data'){
    $package_id=  $_REQUEST['package_id'];
    $packages = get_package_data_by_id($package_id);

    echo json_encode($packages);
}





if($action == 'update_package'){

    $error_message = '';

 
    $image_url = $_FILES['image_url'];
    $destination_name = $_REQUEST['destination_name'];
    $description = $_REQUEST['description'];
    $price = $_REQUEST['price'];
    $package_id = $_REQUEST['package_id'];
    
 
 
    if($image_url == ''){
        $error_message .= "<p class='error_msg'>Your must fill Image! </p>";
    }else if($destination_name == ''){
        $error_message .= "<p class='error_msg'>Your must fill Destination! </p>";
    }else if($description == ''){
        $error_message .= "<p class='error_msg'>Your must fill description! </p>";
    }else if($price == ''){
        $error_message .= "<p class='error_msg'>Your must fill price! </p>";
    }

 
    // file info
    $source = $image_url['tmp_name'];
    $destination = '../assets/image/package/'.$image_url['name'];
 

    //data array
    $data = [
     'image_url' => $destination,
     'destination_name' => $destination_name,
     'description' => $description,
     'price' => $price
     
 
     ];
 
     if($error_message === ''){
 
         $result = update_package($package_id, $data);
     
         if($result === true){
             
             if (!file_exists($destination)) {
                 if(move_uploaded_file($source, $destination)){
                 }
             }
             echo "<p class='success_msg'>Package updated successfully!</p>";
         }elseif ($result === false) {
             echo "<p class='error_msg'>Package added successfully!</p>";
         }
         
        }else{
            echo $error_message;
        }
 
 
    

}


if($action == 'get_data'){
    
    echo "<tr>";
    echo "<td>Image</td>";
    echo "<td>Destination Name</td>";
    echo "<td>Description</td>";
    echo "<td>Price</td>";
    echo "<td>Action</td>";
    echo "</tr>";

    $get_all_package_data = get_all_package_data();
    foreach($get_all_package_data as $data){
        ?>

        
        <tr>
            <td><img width="120px" src="<?php echo $data['image_url'] ?>" alt=""></td>
            <td><?php echo $data['destination_name'] ?></td>
            <td><?php echo $data['description'] ?></td>
            <td><?php echo $data['price'] ?></td>
            <td><a href="edit_package.php?id=<?php echo $data['id'] ?>">Edit</a> | <a id="delete_btn" data-package-id="<?php echo $data['id']; ?>" onclick="deletePackage(event)" href="#">Delete</a></td>
        </tr>

        <?php
    }


}


if($action == 'delete_package'){

    $package_id = $_REQUEST['package_id'];
    $delete_package = delete_package($package_id);
    if($delete_package == true){
        echo "<p class='success_msg'>Package deleted successfully!</p>";
    }elseif ($delete_package == false) {
        echo "<p class='error_msg'>Package deleted failed..!</p>";
    }

}


?>
