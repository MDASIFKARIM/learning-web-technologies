<script>
        
        function validateForm() {
            var reviewerName = document.getElementById("reviewerName").value;
            var rating = document.getElementById("rating").value;
            var reviewTitle = document.getElementById("reviewTitle").value;
            var reviewContent = document.getElementById("reviewContent").value;

            
            if (reviewerName.trim() === "" || reviewTitle.trim() === "" || reviewContent.trim() === "") {
                alert("Please fill out this field");
                return false;
            }

            
            submitReview();
            return false; 
        }

        
        function submitReview() {
            var formData = $("#reviewForm").serialize(); 
            $.ajax({
                type: "POST",
                url: "../Controller/Review.php",
                data: formData,
                success: function(response) {
                    
                    alert("Review submitted successfully!");
                    
                },
                error: function(xhr, status, error) {
                    
                    alert("Error submitting review: " + error);
                }
            });
        }
    </script>