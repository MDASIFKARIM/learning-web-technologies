function ajax(){
    let email = document.getElementById('remail').value;
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', 'emailcheker.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('regemail ='+email)
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
            document.getElementById('EmailTracker').innerHTML = this.responseText;
        }
    }
}