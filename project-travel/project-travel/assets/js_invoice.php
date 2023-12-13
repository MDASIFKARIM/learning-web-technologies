<script>
        
        function validateForm() {
            var invoiceNumber = document.getElementsByName("invoice_number")[0].value;
            var bookingReference = document.getElementsByName("booking_reference")[0].value;
            var totalAmount = document.getElementsByName("total_amount")[0].value;
            var status = document.getElementsByName("status")[0].value;
            var issueDate = document.getElementsByName("issue_date")[0].value;

            
            if (invoiceNumber.trim() === "" || bookingReference.trim() === "" || totalAmount.trim() === "" || status.trim() === "" || issueDate.trim() === "") {
                alert("Please fill out this field");
                return false;
            }

            
            submitInvoice();
            return false; 
        }

        
        function submitInvoice() {
            var formData = $("#invoiceForm").serialize(); 
            $.ajax({
                type: "POST",
                url: "../Controller/invoice.php",
                data: formData,
                success: function(response) {
                    
                    alert("Invoice submitted successfully!");
                    
                },
                error: function(xhr, status, error) {
                    
                    alert("Error submitting invoice: " + error);
                }
            });
        }
    </script>