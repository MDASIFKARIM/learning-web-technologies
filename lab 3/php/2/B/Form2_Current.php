<?php
  if(isset($_POST['submiter']))
  {

    $etrack = $_POST['mailer'];
    echo "your email is $etrack ";
   
  }
?>


<html lang="en">
<head>
    <title>Email Form</title>
</head>
<body>

    <form method = "post" action="" enctype="">
        <fieldset>
            Email <br/> <input type="text" name="mailer" value=""> <input type="button" name="" value ="i" >
            <br/>
            <input type="submit" name="submiter" value="Submit">
            





        </fieldset>
    </form>
    
</body>
</html>