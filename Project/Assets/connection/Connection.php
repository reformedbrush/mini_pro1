<?php
$username="root";
$server="localhost";
$password="";
$db="db_minipro1";

$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
	echo"Connection failed";
}
?>