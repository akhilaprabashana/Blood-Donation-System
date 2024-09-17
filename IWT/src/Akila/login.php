<?php
 include("conn.php");
 session_start();

    ?>
<!DOCTYPE HTML>
<html>

<head>
  <title>eBloodBank ::BloodDonationSystem</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">

   
        <h1><a href="login.html">eBlood<span class="lg_colour">Bank</span></a></h1>
          <h2>Give the gift of life :: Donate Blood</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">

          <li><a href="../Nadula/Nadula/index.html">Home</a></li>
          <li class="selected"><a href="login.php">Login</a></li>
                  </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
 
      <div id="content">
     
        <h1>Administrator</h1>
        <p>eBloodBank </p>

         <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">


         <div class="form_settings">
          <p><span>Username:</span><input class="contact" type="text" name="username" value="" required/></p>
            <p><span>Password:</span><input class="contact" type="password" name="password" value="" required/></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="login" value="submit" /></p>
          </div>
    
         


<br>
  <?php
    include 'conn.php';

  if(isset($_POST["login"])){

    $username=mysqli_real_escape_string($conn,$_POST["username"]);
    $password=mysqli_real_escape_string($conn,$_POST["password"]);

    $sql="SELECT * from admin where username='$username' and passcode='$password'";
    $result=mysqli_query($conn,$sql) or die("query failed.");

    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_assoc($result)){
        session_start();
         $_SESSION['loggedin'] = true;
        $_SESSION["username"]=$username;
        header("Location: donor.php");
      }
    }
    else {
      echo '<div class="alert alert-danger" style="font-weight:bold"> Username and Password are not matched!</div>';
    }

  }
   ?>
 </form>

      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Akhila | SLIIT | IT21255588 | 2022</a>
    </div>
  </div>
</body>
</html>

