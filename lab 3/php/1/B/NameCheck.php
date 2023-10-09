<?php 
if(isset($_POST['submiter']))
{
   
    $myname = $_POST['username'];
    echo "My name is $myname";
}
?>

<html lang="en">
<head>
    <title>Name Form</title>
</head>
<body>

    <form method ="post" action="" enctype="">
        <fieldset>
            Name <br/> <input type="text" name="username" value=""> <br/>
            <input type="submit" name="submiter" value="Submit">
    





        </fieldset>
    </form>
    
</body>
</html>