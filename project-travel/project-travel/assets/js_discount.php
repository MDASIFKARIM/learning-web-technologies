<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("form");

        form.addEventListener("submit", function (event) {
            event.preventDefault(); 

            
            const discountName = document.getElementById("discount_name").value;
            const value = document.getElementById("value").value;
            const startDate = document.getElementById("start_date").value;
            const endDate = document.getElementById("end_date").value;
            const description = document.getElementById("description").value;

            
            if (discountName.trim() === '' || value.trim() === '' || startDate.trim() === '' || endDate.trim() === '' || description.trim() === '') {
                alert("Please fill out this field.");
                return;
            }

            
            const formData = new FormData(form);

            fetch("../Controller/process_discount.php", {
                method: "POST",
                body: formData
            })
            .then(response => {
                
                console.log(response);
                
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>
