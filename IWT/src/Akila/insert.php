<!DOCTYPE html>
<html>

<head>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "blooddonationsystem");
		

		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		

        
		$first_name = $_REQUEST['name'];
		$last_name = $_REQUEST['age'];
		$gender = $_REQUEST['blood'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
        $id = $_REQUEST['id'];
		

        if(isset($_POST['insert']))
        {

		$sql = "INSERT INTO donor (Fullname, Age, Bloodgroup, Address, Email) VALUES ('$first_name',
			'$last_name','$gender','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
            echo '<script language="javascript">';
            echo 'alert("Successfully added"); location.href="donor.php"';
            echo '</script>';

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
    }

    if(isset($_POST['update']))
    {
       
    $sql="UPDATE donor SET Age='$last_name' WHERE Did='$id'";
    
    if(mysqli_query($conn, $sql)){
        echo '<script language="javascript">';
        echo 'alert("Successfully Updated"); location.href="donor.php"';
        echo '</script>';

    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }      
    }

    if(isset($_POST['delete']))
    {
        $sql="DELETE FROM donor WHERE Fullname='$first_name'";
        if(mysqli_query($conn, $sql)){
            echo '<script language="javascript">';
            echo 'alert("Successfully deleted"); location.href="donor.php"';
            echo '</script>';

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
    }

		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
