<?php
$gend ="";
  if(isset($_POST['submiter']))
  {
    $gend = $_POST['gender'];
  
  }
 
?>

<<html lang="en">
<head>
    <title>Gender Form</title>
</head>
<body>

    <form method ="post" action="" enctype="">
        <fieldset>
          <legend>Gender</legend>
          <input type="radio" name="gender" value="<?php if($gend == 'Male') echo 'checked = checked' ?>" /> Male
          <input type="radio" name="gender" value="<?php if($gend == 'Female') echo 'checked = checked' ?>" /> Female
          <input type="radio" name="gender" value="<?php if($gend == 'Other') echo 'checked = checked' ?>" /> Other <br/>
          




        </fieldset>
       <br/> <input type="submit" name="submiter" value="Submit" /> 
    </form>
    
</body>
</html>