<?php
    require_once('Rconfig.php');
?>
<DOCTYPE html>
    <html>
    <head>
        <title>Donor Registration</title>
        <link rel="stylesheet" href="styles/index.css">
        <link rel = "stylesheet" href="styles/Dregister.css">
    </head>
    <body> 
        
        <?php
            if(isset($_POST['register']))
            {
                $Fullname = $_POST['Fullname'];
                $Contact = $_POST['Contact'];
                $Username = $_POST['Username'];
                $Email = $_POST['Email'];
                $Password = $_POST['Password'];
                $Age = $_POST['Age'];
                $Address = $_POST['Address'];
                $Gender = $_POST['Gender'];
                $Bloodgroup = $_POST['Bloodgroup'];

                $sql = "INSERT INTO donor (Fullname,Contact,Email,Username,Password,Age,Address,Gender,Bloodgroup) VALUES (?,?,?,?,?,?,?,?,?)";
                $stmtinsert = $db->prepare($sql);
                $result = $stmtinsert->execute([$Fullname,$Contact,$Email,$Username,$Password,$Age,$Address,$Gender,$Bloodgroup]);

                if($result)
                {
                    echo '<script>alert("Successfully Registered")</script>' ;
                }
                else
                {
                    '<script>alert("Error")</script>' ;
                }
            }
        ?>

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
          <li><a class="selected" href="index.html">Home</a></li>
          <li><a href="news.html">News</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="contacts.html">Contact Us</a></li>
          <li><a href="about1.html">About</a></li>
        </ul>
      </div>
    </div>
            
        <div class="middle">
        <div class="body-content">
            <div class="module">
                <form action = "Dregister.php" method = "post">
                    <h1>Create an Account</h1>
                    <input type="text" placeholder="FullName" name="Fullname" required>
                    <input type="text" placeholder="Contact No." name="Contact" required>
                    <input type="text" placeholder="Username" name="Username" required>
                    <input type="email" placeholder="Email" name="Email" required>
                    <input type="password" placeholder="Password" name="Password" required>
                    <input type="text" placeholder="Age" name="Age" required>
                    <input type="text" placeholder="Address" name="Address" required>
                    <input type="text" placeholder="Gender" name="Gender" required>
                    <input type="text" placeholder="Bloodgroup" name="Bloodgroup" required>

                    <input type="submit" value="Register" name="register">
                    <a href="login.html">Already have an account?</a>
                </form>
            </div>
        </div>
        </div>

        <div id="footer">
      Copyright &copy; IT21252204 | SLIIT | 2022 | DESIGN BY - MLB_04.01_02 </a>
    </div>
  </div>
        
    </body>
    </html>