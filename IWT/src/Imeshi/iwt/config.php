<?php
    $conn=new mysqli('localhost','root','','blooddonationsystem');
	if($conn->connect_error){
		die("connection failed: " .$conn->connect_error);}
		
?>		
