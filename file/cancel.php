<?php
//cancel /iptal islemi

include "connection.php";
    $reqid=$_GET['reqid'];
	$sql = "delete from bloodrequest where reqid='$reqid'";
	if (mysqli_query($conn, $sql)) 
    {
	$msg="Kan talebini iptal ettiniz.";
	header("location:../sentrequest.php?msg=".$msg );
    } 
    else {
    $error="Kayıt silinirken hata olustu: " . mysqli_error($conn);
    header("location:../sentrequest.php?error=".$error );
    }
    mysqli_close($conn);
?>