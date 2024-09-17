<?php
include "Dconfig.php";

if(isset($_SESSION['Usernmae'])){
    header('Location: Daccount.php');
}

if(isset($_POST['logout'])){
    session_destroy();
    header('Location: Dlogin.php');
}
?>

<!doctype html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/Daccount.css">
    </head>
    <body>
    
    <div id="main">
    <div id="header1">
      <div id="lg">
        <div id="lg_text">
          <h1><a href="index.html">eBlood<span class="lg_colour">Bank</span></a></h1>
          <h2>Give the gift of life :: Donate Blood</h2>
        </div>
      </div>

      <div id="menubar">
        <ul id="menu">
          <li><a href="Donorindex.html">Home</a></li>
          <li><a href="news.html">News</a></li>
          <li><a class="selected" href="Daccount.php">Dashboard</a></li>
          <li><a href="Dcontacts.html">Contact Us</a></li>
          <li><a href="Dabout1.html">About</a></li>
        </ul>
      </div>
    </div>
  
    <div class ="middle">
        <h1>Homepage</h1>
        <form method='post' action="">
        <h2>Hello,</h2>
        <button type="menu"  name="app" value="app" id="app"><a class="app" href="../../Dilmi/Dilmi/Appointmentform.html">Request an Appointment</a></button>
        <button type="menu"  name="app" value="app" id="app"><a class="app" href="../../Dilmi/Dilmi/Appointmenttable.html">View Appointments</a></button>
        <button type="submit"  name="logout" value="logout" id="login">Log out</button>
        </form>

        <div id="footer">
      Copyright &copy; IT21252204 | SLIIT | 2022 | DESIGN BY - MLB_04.01_02 </a>
    </div>
  </div>

    </body>
</html>