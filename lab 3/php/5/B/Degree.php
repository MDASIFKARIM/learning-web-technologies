<?php
    if(isset($_POST['submiter'])){
        $ssc = $hsc = $bsc = $msc = '';
        if(isset($_POST['ssc'])) $ssc = $_POST['ssc'];
        if(isset($_POST['hsc'])) $hsc = $_POST['hsc'];
        if(isset($_POST['bsc'])) $bsc = $_POST['bsc'];
        if(isset($_POST['msc'])) $msc = $_POST['msc'];

        echo "Your degree(s) are {{$ssc} {$hsc} {$bsc} {$msc}}";
    }
?>










<html lang="en">
<head>
    <title>Degree Form</title>
</head>
<body >

    <form method ="post" action="Form5_loader.php" enctype="">
        <fieldset>
          <legend>Degree</legend>
          <input type="checkbox" name="ssc" value="SSC" size= 1 /> SSC
         <input type="checkbox" name="hsc" value="HSC" size= 1 /> HSC
          <input type="checkbox" name="bsc" value="BSc" size= 1 /> Bsc
          <input type="checkbox" name="msc" value="MSc" size= 1 /> Msc
          
          




        </fieldset>
        <br/>
        <input type="submit" name="submiter" value="submit" />  

    </form>
    
</body>
</html>