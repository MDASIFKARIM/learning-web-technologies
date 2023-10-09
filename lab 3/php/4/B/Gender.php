<?php
  if(isset($_POST['submiter']))
  {
    $gend = $_POST['gender'];
    echo "your Gender is $gend";
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
          <input type="radio" name="gender" value="Male" /> Male
          <input type="radio" name="gender" value="Female" /> Female
          <input type="radio" name="gender" value="Other" /> Other <br/>
          




        </fieldset>
       <br/> <input type="submit" name="submiter" value="Submit" /> 
    </form>
    
</body>
</html>