<?php
$page_title = "All Packages";
require_once('../model/packagesModel.php');

include_once('../controller/functions.php');




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
                    <h3>All Packages</h3>
                    <table border="1" id="show_packages">

                    </table>
                    <div id="show_message"></div>
                </div>
            </div>
        </div>
    </section>


    <script>
        showTableData();
        function showTableData(){

            let action = 'get_data';
                let xhttp = new XMLHttpRequest();
                xhttp.open('GET', '../controller/packagesController.php?action='+action, true);

                xhttp.send();
                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById('show_packages').innerHTML = this.responseText;
                    }
                }
        }

            //delete operation using ajax
            function deletePackage(event){
            event.preventDefault();
            alert('are you sure to delete?');
            let package_id = event.target.getAttribute('data-package-id');
            package_id = parseInt(package_id);

            let action = 'delete_package';
            let xhttp = new XMLHttpRequest();
            xhttp.open('GET', '../controller/packagesController.php?action='+action+'&package_id='+package_id, true);
            xhttp.send();
            xhttp.onreadystatechange = function(){

                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('show_message').innerHTML = this.responseText;
                    showTableData();
                }
            }

        }

    </script>

<!-- inluding footer -->
<?php include_once('../view/component/footer.php'); ?>
