<?php

//info bilgi ekleme islemleri 

require 'connection.php';
session_start();
if(!isset($_SESSION['hid']))
{
	header('location:login.php');
}
else {
	if(isset($_POST['add'])){
		$hid=$_SESSION['hid'];
		$bg=$_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT hid FROM bloodinfo where hid='$hid' && bg='$bg'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'Bu kan örnegini zaten eklediniz.';
			header( "location:../bloodinfo.php?error=".$error );
}else{
		$sql = "INSERT INTO bloodinfo (bg, hid) VALUES ('$bg', '$hid')";
		if ($conn->query($sql) === TRUE) {
			$msg = "Kaydı basariyla eklediniz.";
			header( "location:../bloodinfo.php?msg=".$msg );
		} else {
			$error = "Hata: " . $sql . "<br>" . $conn->error;
            header( "location:../bloodinfo.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>