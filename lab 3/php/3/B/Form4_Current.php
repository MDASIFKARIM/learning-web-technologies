<?php
  if(isset($_POST['submiter']))
  {

    $dat = $_POST['date'];
    $mat = $_POST['month'];
    $yat = $_POST['year'];

    echo "Date is : $dat,$mat,$yat";
   
  }

  
?>


<html lang="en">
<head>
    <title>Date of Birth Form</title>
</head>
<body >

    <form method =" post " action="" enctype="">
        <fieldset>
          <legend>Date of Birth</legend>
              dd     mm    yyyy  <br/>
          <input type="text" name="date" value="" size= 1 /> / <input type="text" name="month" value="" size= 1 /> / <input type="text" name="year" value="" size= 1 /> <br/> <hr> 
          <input type="submit" name="submiter" value="submit" />  
          
          




        </fieldset>

    </form>
    
</body>
</html>