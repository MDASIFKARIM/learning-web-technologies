<?php

$page_title = "Add Package";


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
                    <h3>Add Package</h3>
                    <form action="#" method="post" id="package_form" enctype="multipart/form-data" onsubmit="addPackage()">

                    <label for="image_url">Upload Image  </label><input type="file" name="image_url" id="image_url">

                    <label for="destination_name">Destination Name </label><input type="text" name="destination_name" id="destination_name">

                    <label for="description">Description </label><textarea name="description" id="description"></textarea>

                    <label for="price">Price </label><input type="text" name="price" id="price">

                    <p><?php if(isset($error_message)){echo $error_message;} ?></p>
                    <p><?php if(isset($success_message)){echo $success_message;} ?></p>

                    <input type="submit" value="Submit" name="submit">

                    </form>
                    <div id="show_message"></div>
                </div>
            </div>
        </div>
    </section>




                



    <script>
        //adding package with ajax
        function addPackage(){
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
            }else {
                let formData = new FormData(document.getElementById('package_form'));

                formData.append('action', 'add_package');

                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../controller/packagesController.php', true);

                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('show_message').innerHTML = this.responseText;
                        document.getElementById('image_url').value = '';
                        document.getElementById('destination_name').value = '';
                        document.getElementById('description').value = '';
                        document.getElementById('price').value = '';
            
                    }
                }

                xhttp.send(formData);
                }
            }
        
    </script>
    
<!-- inluding footer -->
<?php include_once('../view/component/footer.php'); ?>
