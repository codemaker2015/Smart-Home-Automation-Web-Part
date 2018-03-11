<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="smarthome";

	$mysqli= new mysqli($hostname, $username, $password,$dbname);
	//check connection
	if(!$mysqli)
		die("connection failed:".mysqli_connect_error());
?>