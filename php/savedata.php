<?php 
	$name = $_POST["FirstName"];
	$email = $_POST["Email"];
	$mobileNo = $_POST["Number"];
	$messeg = $_POST["Message"];

	// creatig connection
	$link = mysqli_connect("localhost","id4940622_root","531531","id4940622_contactmsgs");
	// sending SQl query using above connection
	$qr = "INSERT INTO tbl_user(fristName,email,number,message) VALUES ('$name','$email','$mobileNo','$messeg')";
	$run = mysqli_query($link,$qr);
	
	if($run){
		echo '<script language="javascript">';
        echo 'alert("Message Successfully Sent")';
        echo '</script>';
	}
	else{
		echo '<script language="javascript">';
        echo 'alert("Something went wrong please try again later")';
        echo '</script>';
	}
?>