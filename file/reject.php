<?php

//durum ayari, reddetme

include "connection.php";
    $reqid=$_GET['reqid'];
	$status = "Rejected";
	$sql = "update bloodrequest SET status = '$status' WHERE reqid = '$reqid'";
    if (mysqli_query($conn, $sql)) {
	$msg="İsteği Reddettiniz.";
	header("location:../bloodrequest.php?msg=".$msg );
    } else {
    $error= "Durum degistirilirken hata olustu: " . mysqli_error($conn);
    header("location:../bloodrequest.php?error=".$error );
    }
    mysqli_close($conn);
?>