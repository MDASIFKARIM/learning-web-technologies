<?php 
    require_once("../Model/personsModel.php");
    $Login_email = $_POST['useremail'];
    $Login_password = $_POST['userpassword'];

    

    if($Login_email == "" || $Login_password == ""){
        echo "Invalid Email or password!";   
    }
    
    else{
    
        $status_checker = login($Login_email, $Login_password);

        if($status_checker == true)
        {
            $row = $_SESSION['RowPicker'];
           if(isset($_POST['logsubmit']))
           {
                if(!is_null($row) && $row["Email"] == $_SESSION['EmailTracker'])
                {
                    $_SESSION['Username'] = $row['Name'];
                    $_SESSION['UserEmail'] = $row['Email'];
                    $_SESSION['UserPhoneno'] = $row['Phonenumber'];
                    $_SESSION['UserPass'] = $row['Password'];
                    
                    header("location:../view/home.php");

                }
    
                

           }

           else
           {
                echo "Invalid";
                header("location:../view/register.php");
           }
        }
    
    }


?>

