function validateForm() {
    let name = document.getElementById("name").value;
    let contact = document.getElementById("contact").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let cpassword = document.getElementById("cpassword").value;
    let nid = document.getElementById("nid").value;
    let age = document.getElementById("age").value;
    let error = "";

    if (name === "" || contact === "" || email === "" || password === "" || cpassword === "" || nid === "" || age === "") {
        error += "Please fill in all the fields.<br>";
    } else if (password !== cpassword) {
        error += "Passwords do not match.<br>";
    }

    document.getElementById("error").innerHTML = error;

    if (!error) {
        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../controller/signup_controller.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        let data = {
            name: name,
            contact: contact,
            email: email,
            password: password,
            cpassword: cpassword,
            nid: nid,
            age: age
        };

        let jsonData = JSON.stringify(data);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let res = JSON.parse(this.responseText);
                if (res.success) {
                    window.location.replace("../view/index.php");
                } else {
                    document.getElementById("error").innerHTML = "Registration failed. Please try again.";
                }
            }
        };

        xhttp.send("data=" + jsonData);
    }
}
