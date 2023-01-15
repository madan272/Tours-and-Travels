<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "travel";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('failed to connect');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header class="header">
        
         <h2> Dream <span>Escape</span></h2>
      </div>
         


         <nav class="navbar">
             
             <a href="dashboard.php">Home</a>
             <a href="admin.php">Book</a>
             <a href="user.php">User</a>
             <a href="message.html">Message</a>
             <a href="login1.php">Admin</a>
         </nav>
       
          <div class="icons">
              <div class="fas fa-bars" id="menu-btn"></div>
              
          </div>

          
          </header>

      
<!--home section-->
<section class="home" id="home" style="background: url(img/bgimg.png) no-repeat; background-position: center; background-size: cover;">

   <div class="content" >
      <marquee behavior="alternate" direction="right"><h1><span>D</span>ashboard</h1></marquee>
    </div>

</section>


 <marquee behavior="alternate" direction="left">  <div class="box">
 <?php
     $sql = "SELECT * from book";
     $sql_run = mysqli_query($con, $sql);

     if($sql_total = mysqli_num_rows( $sql_run))
     {
        echo '<h1 class="mb-0">'.$sql_total.'</h1>';
     }
     else
     {
        echo '<h1 class="mb-0">No Data</h1>';
     }
     ?>

<a href="admin.php"><h1>Book Details</h1></a>
    </div>

    <div class="box1">
    <?php
     $sql = "SELECT * from user_form";
     $sql_run = mysqli_query($con, $sql);

     if($sql_total = mysqli_num_rows( $sql_run))
     {
        echo '<h1 class="mb-0">'.$sql_total.'</h1>';
     }
     else
     {
        echo '<h1 class="mb-0">No Data</h1>';
     }
     ?>
        <a href="user.php"><h1>User</h1></a>

            </div>

            <div class="box3">
            <?php
     $sql = "SELECT * from msg";
     $sql_run = mysqli_query($con, $sql);

     if($sql_total = mysqli_num_rows( $sql_run))
     {
        echo '<h1 class="mb-0">'.$sql_total.'</h1>';
     }
     else
     {
        echo '<h1 class="mb-0">No Data</h1>';
     }
     ?>
    
                <a href="message.php"><h1>Message</h1></a>
                    </div>

            <div class="box2">
            <?php
            include 'connect.php';
     $sql = "SELECT * from login";
     $sql_run = mysqli_query($con, $sql);

     if($sql_total = mysqli_num_rows( $sql_run))
     {
        echo '<h1 class="mb-0">'.$sql_total.'</h1>';
     }
     else
     {
        echo '<h1 class="mb-0">No Data</h1>';
     }
     ?>
    
                <a href="login1.php"><h1>Admin</h1></a>
                    </div>
</marquee> 
</body>
</html>