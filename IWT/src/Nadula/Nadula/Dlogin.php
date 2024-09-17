
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/Dlogin.css">
        <title>Login</title>
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
        <li><a class="selected" href="index.html">Home</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="contacts.html">Contact Us</a></li>
        <li><a href="about1.html">About</a></li>
        </ul>
      </div>
    </div>

        <div class ="middle">
            <form action="Dloginfunc.php" method="post">
                <div class="bdy">
                    <h2>Welcome Back</h2>
                    
                    <input type ="text" placeholder="Username" name="Username" id="Username"  required>
                    <input type ="password" placeholder="Password" name="Password" id="Password" required>
                    <button type="submit"  name="button" id="login">Log in</button>
                </div class="fpsw" style="background-color:#f1f1f1">
                <div>
                <a class="a2" href="Dregister.php">Don't have an account? Sign up</a>
            </div>
        </form>   
    </div> 

    <div id="footer">
      Copyright &copy; IT21252204 | SLIIT | 2022 | DESIGN BY - MLB_04.01_02 </a>
    </div>
  </div>

    </body>
</html>