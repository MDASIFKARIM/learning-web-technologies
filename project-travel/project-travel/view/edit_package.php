<?php
$page_title = "Edit Package";
include_once('../controller/functions.php');
require_once('../model/packagesModel.php');


$package_id = '';
if(isset($_GET['id'])){
    $package_id = $_GET['id'];
}



?>

<!-- inluding header -->
<?php include_once('../view/component/header_backend.php'); ?>


<section>
        <div class="layout-container">
            <div class="layout-row">
                <div class="backend-sidebar">
                    <!-- including sidebar -->
                    <?php include_once('../view/component/sidebar_backend.php'); ?>
                </div>
                <div class="form-area">
                    <h3>Edit Package</h3>
                    
                    <img id="current_image" src="" width="200px">
                    <form action="#" method="post" enctype="multipart/form-data" id="package_form" onsubmit="updatePackage()">

                    <label for="image_url">Upload Image  </label><input type="file" name="image_url" id="image_url">
         
                    <label for="destination_name">Destination Name </label><input type="text" name="destination_name" id="destination_name" value="">
             
                    <label for="description">Description </label><textarea name="description" id="description"></textarea>
               
                    <label for="price">Price </label><input type="text" name="price" id="price">
         
                    <input type="submit" value="Submit" name="submit">
     
                    </form>
                    <div id="show_message"></div>
                </div>
            </div>
        </div>
    </section>


    <script>
        showPackageData();
        function showPackageData(){
            let package_id = <?php echo $package_id; ?>;
            let action = 'current_data';
            let xhttp = new XMLHttpRequest();
            xhttp.open('GET', '../controller/packagesController.php?action='+action+'&package_id='+package_id, true);

            xhttp.send();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    let data = JSON.parse(this.responseText);
                    document.getElementById('current_image').src = data.image_url;
                    document.getElementById('destination_name').value = data.destination_name;
                    document.getElementById('description').value = data.description;
                    document.getElementById('price').value = data.price;



                }
            }

        }

        function updatePackage(){
            event.preventDefault();



            let image_url =document.getElementById('image_url').value;
            let destination_name =document.getElementById('destination_name').value;
            let description =document.getElementById('description').value;
            let price =document.getElementById('price').value;

            if(image_url == ''){
                document.getElementById('show_message').innerHTML = '<p class="error_msg">you must select an image..</p>';
            }else if(destination_name == ''){
                document.getElementById('show_message').innerHTML = '<p class="error_msg">you enter destination name..</p>';
            }else if(description == ''){
                document.getElementById('show_message').innerHTML = '<p class="error_msg">you enter a description..</p>';
            }else if(price == ''){
                document.getElementById('show_message').innerHTML = '<p class="error_msg">you enter price..</p>';
            }else{

                let formData = new FormData(document.getElementById('package_form'));

                formData.append('action', 'update_package');
                formData.append('package_id', <?php echo $package_id; ?>);

                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../controller/packagesController.php', true);

                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('show_message').innerHTML = this.responseText;
                        showPackageData();

                    }
                }

                xhttp.send(formData);
                }
        }
    </script>



<!-- inluding footer -->
<?php include_once('../view/component/footer.php'); ?>


