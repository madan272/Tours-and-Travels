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

    <title>pdf</title>
  </head>

  <style>
  
 .pdf img{
   height: 8.5rem;
   width: 8.5rem;

}

.pdf h2{
   font-family: 'Times New Roman', Times, serif;
   font-size: 2.7rem;
   font-weight: bold;
   font-style: italic;
   color: blue;
}

.pdf  span{
   font-family: 'Times New Roman', Times, serif;
   font-size: 2.5rem;
   color: black;
   font-weight: bold;
   font-style: italic;
}

#btn{
    background-color: black;
    margin-top: 10rem;
    color: white;
    font-size: 2rem;
border-radius: .5rem;
margin-top: 5rem;
border-style: outset;
    border: none;
    text-decoration: none;
 }
 
 #btn:hover{
   color: white;
    background-color: blue;
 }


  </style>
  <body>
      <div class="pdf">
        <img src="img/logo.png" alt="logo">
            <h2>Sri Travels</h2>
      </div>
      
    <h1>Tours & Travels</h1>

    <div class="container">
    
    <table class="table" border="1" cellpadding="5" cellspacing="5" style="border-collapse: collapse;"> 
                <thead bgcolor="lightgray">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Second Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">PhoneCode</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Location</th>
                    <th scope="col">Address</th>
                    <th scope="col">Guests</th>
                    <th scope="col">Arrivals</th>
                    <th scope="col">leaving</th>
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
                    $secondname=$row['secondname'];
                    $email=$row['email'];
                    $phonecode=$row['phonecode'];
                    $phone=$row['phone'];
                    $location=$row['location'];
                    $address=$row['address'];
                    $guests=$row['guests'];
                    $arrivals=$row['arrivals'];
                    $leaving=$row['leaving'];
                    
                    echo '<tr>
                    <th scop="row">'.$id.'</th>
                    <td>'.$firstname.'</td>
                    <td>'.$secondname.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phonecode.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$location.'</td>
                    <td>'.$address.'</td>
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
    </div>
    <div>
    <script>
      function printpage(){
        var printbutton = document.getElementById("btn");
        printbutton.style.visibility = 'hidden';
        window.print();
        printbutton.style.visibility = 'visible';
      }
    </script>
    <center><a href="book.php" id="btn" onclick="printpage()">Print</a></center>

  </body>
</html>
