<?php
$etrack="";
  if(isset($_POST['submiter']))
  {

    $etrack = $_POST['mailer'];
    
   
  }
?>


<html lang="en">
<head>
    <title>Email Form</title>
</head>
<body>

    <form method = "post" action="" enctype="">
        <fieldset>
            Email <br/> <input type="text" name="mailer" value="<?php echo $etrack ?>"> <input type="button" name="" value ="i" >
            <br/>
            <input type="submit" name="submiter" value="Submit">
            





        </fieldset>
    </form>
    
</body>
</html>