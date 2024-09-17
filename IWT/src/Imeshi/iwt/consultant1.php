<?php
require 'config.php';
		
  $Name$_POST["Enter your CID"];
  $Addres$_POST["Name"];
  $Contact$_POST["Contact Number"];
  

  $sql = "insert into add_patient(name,address,contact)values ('$Name',  '$Addres,' $Contact') ";"; 
  
  if (mysqli_query($conn,$sql)){
	  echo "your response has been submitted";
	  header ("Location:consultant.html");
  }
  else {
	  echo "Error! Your response has not been submitted";
  }

  $conn->close();
?>