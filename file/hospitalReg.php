<?php

//

require 'connection.php';
	if(isset($_POST['hregister']))
	{
		$hname=$_POST['hname'];
		$hemail=$_POST['hemail'];
		$hpassword=$_POST['hpassword'];
		$hphone=$_POST['hphone'];
		$hcity=$_POST['hcity'];
		$check_email = mysqli_query($conn, "SELECT hemail FROM hospitals where hemail = '$hemail' ");
		if(mysqli_num_rows($check_email) > 0){
		$error= 'Bu e-posta zaten var. Lütfen baska bir E-posta deneyin.';
		header( "location:../register.php?error=".$error );
	}
	else{
		$sql = "INSERT INTO hospitals (hname, hemail, hpassword, hphone, hcity)
		VALUES ('$hname','$hemail', '$hpassword', '$hphone', '$hcity')";
		if ($conn->query($sql) === TRUE) 
		{
			$msg = 'Basariyla kayıt oldunuz. Devam etmek icin lütfen giris yapınız.';
			header( "location:../login.php?msg=".$msg );
		} 
		else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
			header( "location:../register.php?error=".$error );
		}
		$conn->close();
	}

	}
?>