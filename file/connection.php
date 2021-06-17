<?php

//mydb bloodbank
//database info

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('MySql Baglanamadi:' .mysql_error());
}
?>