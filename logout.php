<?php
    session_start();
    session_unset();
    session_destroy();
    $msg="Cıkıs yaptınız.";
    header( "location:index.php?msg=".$msg );
?>