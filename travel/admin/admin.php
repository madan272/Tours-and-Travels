<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "travel";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('failed to connect');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <link href="admin.css">
    <title>admin</title>
  </head>

  <style>
    .admin1 h1{
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
    font-size: 3.5rem;
    font-weight: bold;
    font-style: italic;
}

.admin1 h1 span{
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
    color: blueviolet ;
    font-size: 3.5rem;
    font-weight: bold;
    font-style: italic;
    text-decoration: underline; 
}

.admin1{
  background-size: cover !important;
   background-position: center !important;
   padding-top: 10rem;
   padding-bottom:15rem;
   display: flex;
   align-items: center;
   justify-content: center;
}
  </style>
  <body >
      <div class="admin1" style="background: url(img/bgimg.png) no-repeat; background-position: center; background-size: cover;">
     <h1><span>Customer</span> Details</h1>
   </div>
   
    <div class="container">

         <center> <table class="table" border="1" style="border-collapse: collapse; font-size: 2rem;"> 
                <thead bgcolor="lightgray">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Location</th>
                    <th scope="col">Guests</th>
                    <th scope="col">Arrivals</th>
                    <th scope="col">Leaving</th>
                  </tr>
                </thead>
                <tbody>

                <?php 
                
                 $sql="Select * from `book`";
                

                 $result=mysqli_query($con,$sql);
                 if($result)
                 {
                  while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $firstname=$row['firstname'];
                    $email=$row['email'];
                    $phone=$row['phone'];
                    $address=$row['address'];
                    $location=$row['location'];
                    $guests=$row['guests'];
                    $arrivals=$row['arrivals'];
                    $leaving=$row['leaving'];
                    
                    echo '<tr>
                    <th scop="row">'.$id.'</th>
                    <td>'.$firstname.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$address.'</td>
                    <td>'.$location.'</td>
                    <td>'.$guests.'</td>
                    <td>'.$arrivals.'</td>
                    <td>'.$leaving.'</td>
                    </tr>';
                  }
                 }

                ?>

                </tbody>
              </table>
          </table>
          </center>
    </div>
  </body>
</html>



