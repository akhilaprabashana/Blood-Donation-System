<?php
 include("conn.php");
 session_start();

    ?>
<!DOCTYPE HTML>
<html>

<head>

<style>
            table tr:not(:first-child){
                cursor: pointer;transition: all .25s ease-in-out;
            }
            table tr:not(:first-child):hover{background-color: #ddd;}
         


</style>

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


          
          <li class="selected"><a href="donor.php">Donor Details</a></li>
          <li><a href="dashboard.php">Dashboard</a></li>

          
          <div class="topnav-right">
          <a href="login.php">Logout</a>


  </div>
          
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
  
       
        <form action="insert.php" method="post">
             

                         
                <p>
                            <label for="firstName">Full Name:</label>
                            <input type="text" name="name" id="name">
                         </p>
              
                          
             <p>
                            <label for="lastName">Age:</label>
                            <input type="text" name="age" id="age">
                         </p>
              
                          
             <p>
                            <label for="Gender">Blood Group:</label>
                            <input type="text" name="blood" id="blood">
                         </p>
              
                          
             <p>
                            <label for="Address">Address:</label>
                            <input type="text" name="address" id="address">
                         </p>
              
                          
             <p>
                            <label for="emailAddress">Email:</label>
                            <input type="text" name="email" id="email">
                         </p>
                      
                         <p>
                            <label for="id">ID:</label>
                            <input type="text" name="id" id="id" readonly>
                         </p>   
                         <input class="submit" type="submit" name="insert" value="Insert" />
                         <input class="submit" type="submit" name="update" value="Update" />
                         <input class="submit" type="submit" name="delete" value="Delete" />
                      </form>
      </div>



      
      <div id="content">

        <h2>Search</h2>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>

        

        <table style="width:100%; border-spacing:0;" id="table" >
    <tr>
    
    </tr>
    <tr>

    
    <tr><th>Full Name</th><th>Age</th><th>Blood Group</th><th>Address</th><th>Email</th><th>ID</th></tr>
  
    </tr>
    
    <?php

    $con = mysqli_connect('localhost','root','');




    if(!mysqli_select_db($con,'blooddonationsystem'))
    {
        echo "Database Not Selected";
    }

	
    $sql = "SELECT * FROM donor";


    $records = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($records))
    {
		?>
        <tr>
        
        <td><?php echo $row['Fullname'] ?></td>
        <td><?php echo $row['Age'] ?></td>
        <td><?php echo $row['Bloodgroup'] ?></td>
        <td><?php echo $row['Address'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['Did'] ?></td>
                </tr>
        <?php

   }
?>

        </table>


        <script> 
            

            
            var table = document.getElementById("table"),rIndex;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                table.rows[i].onclick = function()
                {
                    rIndex = this.rowIndex;
                    console.log(rIndex);
                    
                    document.getElementById("name").value = this.cells[0].innerHTML;
                    document.getElementById("age").value = this.cells[1].innerHTML;
                    
		    document.getElementById("blood").value = this.cells[2].innerHTML;
                    
                    document.getElementById("address").value = this.cells[3].innerHTML;                
		    
		    document.getElementById("email").value = this.cells[4].innerHTML;
            document.getElementById("id").value = this.cells[5].innerHTML;
                    
                    
		};
            }
            
            
          
            
        </script>
       
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
    Copyright &copy; Akhila | SLIIT | IT21255588 | 2022</a>
    </div>
  </div>
</body>
</html>
