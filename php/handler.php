<?php 
    $to = 'gamage2pavithra@gmail.com';
    $fristname = $_POST["FirstName"];
    $email = 'Email - '.$_POST["Email"];
    $phone = 'Phone Number - '.$_POST["Number"]."\n".'Message - '.$_POST["Message"];
   
    
    mail($to,$fristname,$email,$phone);
    
    echo '<script language="javascript">';
      echo 'alert("Message Successfully Sent")';
        echo '</script>';
?>