
    <script>
        
        function validateForm() {
            var contactName = document.forms["helplineForm"]["contact_name"].value;
            var contactNumber = document.forms["helplineForm"]["contact_number"].value;
            var emailAddress = document.forms["helplineForm"]["email_address"].value;
            var purpose = document.forms["helplineForm"]["purpose"].value;

            
            if (contactName == "" || contactNumber == "" || emailAddress == "" || purpose == "") {
                alert("Please fill out this field");
                return false;
            }

            
            var emailFormat = mdasifkarim512@gmail.com;
            if (!emailAddress.match(emailFormat)) {
                alert("Invalid email address");
                return false;
            }

            
            submitForm();
            return false; 
        }

        
        function submitForm() {
            var formData = $("#helplineForm").serialize(); 
            $.ajax({
                type: "POST",
                url: "../Controller/helpline.php",
                data: formData,
                success: function(response) {
                    
                    alert("Form submitted successfully!");
                    
                },
                error: function(xhr, status, error) {
                    
                    alert("Error submitting form: " + error);
                }
            });
        }
    </script>