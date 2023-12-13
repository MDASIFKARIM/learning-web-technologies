<script>
        
        function validateForm() {
            var photo = document.querySelector('input[type=file]').files[0];
            var description = document.getElementsByName("description")[0].value;

            
            if (!photo) {
                alert("Please select a file");
                return false;
            }

            
            if (description.trim() === "") {
                alert("Please fill out this field");
                return false;
            }

            
            uploadPhoto();
            return false; 
        }

        
        function uploadPhoto() {
            var formData = new FormData();
            var fileInput = document.querySelector('input[type=file]');
            var photo = fileInput.files[0];
            var description = document.getElementsByName("description")[0].value;

            formData.append('photo', photo);
            formData.append('description', description);

            $.ajax({
                type: "POST",
                url: "../Controller/upload_servise.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    
                    alert("Photo uploaded successfully!");
                    
                },
                error: function(xhr, status, error) {
                    
                    alert("Error uploading photo: " + error);
                }
            });
        }
    </script>