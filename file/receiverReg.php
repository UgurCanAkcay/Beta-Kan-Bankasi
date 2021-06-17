<?php

//alici receiver kayit islemi

if(isset($_POST['rregister'])){
	require 'connection.php';
	$rname=$_POST['rname'];
	$remail=$_POST['remail'];
	$rpassword=$_POST['rpassword'];
	$rphone=$_POST['rphone'];
	$rcity=$_POST['rcity'];
	$rbg=$_POST['rbg'];
	$check_email = mysqli_query($conn, "SELECT remail FROM receivers where remail = '$remail' ");

		if(mysqli_num_rows($check_email) > 0)
		{
		$error= 'Bu e-posta zaten var. Lütfen baska bir E-posta deneyin.';
		header( "location:../register.php?error=".$error );
		}
		else{
		$sql = "INSERT INTO receivers (rname, remail, rpassword, rphone, rcity, rbg)
		VALUES ('$rname','$remail', '$rpassword', '$rphone', '$rcity', '$rbg')";
		if ($conn->query($sql) === TRUE) {
			$msg = "Basariyla kayit oldunuz. Devam etmek icin lütfen giris yapınız.";
			header( "location:../login.php?msg=".$msg);
		} 
		else {
			$error = "Hata: " . $sql . "<br>" . $conn->error;
			header( "location:../register.php?error=".$error );
		}
		$conn->close();
	}
}
?>