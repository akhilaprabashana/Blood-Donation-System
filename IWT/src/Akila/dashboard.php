<?php
 include("conn.php");
 session_start();

    ?>
<!DOCTYPE HTML>
<html>

<head>
  <title>eBloodBank ::BloodDonationSystem</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <style>
.step
      {
       background: red;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 3.6em;
  margin-right: 5px;
  text-align: center;
  width: 10.6em;
  font-size: 15px;
      }

      .step1
      {
       background: Blue;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 3.6em;
  margin-right: 5px;
  text-align: center;
  width: 10.6em;
  font-size: 15px;
      }

      
    </style>
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

 
        
          <li><a href="donor.php">Donor Details</a></li>
          <li class="selected"><a href="dashboard.php">Dashboard</a></li>
          <div class="topnav-right">
          <a href="login.php">Logout</a>


  </div>  
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">

        <h3>Latest News</h3>
        <h4>eBloodBank</h4>
        <h5>May 20th, 2022</h5>
        <p>Blood Bank Management System<br /><a href="#">Read more</a></p>
        <p></p>
      
        
      </div>
      <div id="content">

        <h1>Stock Details</h1>
        
        <?php
                      $sql =" SELECT * from donor";
                      $result=mysqli_query($conn,$sql) or die("query failed.");
                      $row=mysqli_num_rows($result);

                    ?>
<div class="step1">Donors Available </div>
                  <div class="step"><?php echo $row?></div>
                    
                    <br>
<br></br>
                    <?php
                      $sql1 =" SELECT * from r_form ";
                      $result1=mysqli_query($conn,$sql1) or die("query failed.");
                      $row1=mysqli_num_rows($result1);

                    ?>

<div class="step1"> Patients Available </div>
                    <div class="step"><?php echo $row1?></div>
                   
                    <br>

      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
    Copyright &copy; Akhila | SLIIT | IT21255588 | 2022</a>
    </div>
  </div>
</body>
</html>
