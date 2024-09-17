<?php
include "Dconfig.php";

if(isset($_POST['button'])){

    $Username = mysqli_real_escape_string($conn,$_POST['Username']);
    $Password = mysqli_real_escape_string($conn,$_POST['Password']);

    if ($Username != "" && $Password != "")
    {

        $sql_query = "select count(*) as cntUser from donor where username='".$Username."' and password='".$Password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['Username'] = $uname;
            header('Location: Daccount.php');
        }
        else
        {
            echo '<script>alert("Invalid username or password")</script>';
        }
    }

}