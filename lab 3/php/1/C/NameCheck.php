<?php 
$name ='';
if(isset($_POST['submiter']))
{
   
    $name = $_POST['username'];
    
}
?>

<html lang="en">
<head>
    <title>Name Form</title>
</head>
<body>

    <form method ="post" action="" enctype="">
        <fieldset>
            Name <br/> <input type="text" name="username" value="<?php echo $name ?>"> <br/>
            <input type="submit" name="submiter" value="Submit">
    





        </fieldset>
    </form>
    
</body>
</html>