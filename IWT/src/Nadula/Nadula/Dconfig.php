<?php
    $conn = mysqli_connect("localhost", "root", "", "blooddonationsystem");
 
    if(!$conn)
    {
        die("Connection failed:" .mysqli_connect_error());
    }
?>