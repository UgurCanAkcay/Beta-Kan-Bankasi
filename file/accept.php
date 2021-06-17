<?php
//accept /kabul etme işlemi onayi

include "connection.php";
    $reqid=$_GET['reqid'];
	$status = "Accepted";
	$sql = "update bloodrequest SET status = '$status' WHERE reqid = '$reqid'";
    
    if (mysqli_query($conn, $sql)) 
    {
	$msg="Gelen istegi kabul ettiniz.";
	header("location:../bloodrequest.php?msg=".$msg );
    } 
    else {
    $error= "Durum değiştirilirken hata oluştu: " . mysqli_error($conn);
    header("location:../bloodrequest.php?error=".$error );
    }
    mysqli_close($conn);
?>