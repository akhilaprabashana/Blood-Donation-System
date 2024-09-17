<?php
require 'config.php';
		
  $P..Name$_POST["name"];
  $Address$_POST["address"];
  $Contact$_POST["contact"];
  

  $sql = "insert into add_patient(name,address,contact)values ('$P..Name',' $Address',' $Contact') "; 
  
  if (mysqli_query($conn,$sql)){
	  echo "your response has been submitted";
	  header ("Location:add_patient.html");
  }
  else {
	  echo "Error! Your response has not been submitted";
  }

  $conn->close();
?>