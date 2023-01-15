<?php

include 'config.php';

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $address = $_POST['address'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    
    $sql = "INSERT INTO `book` (`firstname`, `secondname`, `email`, `phone`, `location`, `address`,`guests`,`arrivals`,`leaving`) VALUES ('$firstname','$secondname','$email','$phone','$location','$address','$guests','$arrivals','$leaving')";
    
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert ('succefully booked your Trip to $location ') </script>";
        
    }
    }
    
   mysqli_close($conn);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

   <style>
      form{
          width: 50%;
  margin: auto
      }
  </style>

</head>
<body>

<div class="book" style="background: url(img/bgimg.png) no-repeat; background-position: center; background-size: cover;">
   <h1>BOOK YOUR <span>TRIP!</span> </h1>
</div>

<!-- booking section starts  -->

<div class="book-form">

   <form method="post" autocomplete="off">
   <h2>Book Now</h2>
  <h3>First Name</h3><input type="text" name="firstname" placeholder="First Name"  class="box" required ><br>
  <h3>Second name</h3><input type="text" name="secondname" placeholder="Second Name" class="box" required><br>
 <h3>E-mail</h3> <input type="email" name="email" placeholder="e-mail" class="box" required><br>
 <h3>Phone No</h3><input type="number" placeholder="Phone Number" name="phone" class="box" required><br>

   <h3>Location:</h3> <select class="box" name="location">
       <option value="Mysore">Mysore</option>
       <option value="Bannerghatta Zoo">Bannerghatta zoo</option>
       <option value="Coorg">Coorg</option>
       <option value="Badami">Badami</option>
       <option value="Hampi">Hampi</option>
       <option value="Udupi">Udupi</option>
       <option value="Chikkamagaluru">Chikkamagaluru</option>
       <option value="Taj Mahal">Taj Mahal</option>
       <option value="Ooty">Ooty</option>

   </select> <br><br><br>

  <h3>Address :</h3> <input type="text" placeholder="Address" name="address" class="box" required><br>
  <h3>Guests :</h3> <input type="number" placeholder="no of guests" name="guests" class="box" required>
  <h3>Arrivals :</h3> <input type="date" placeholder="dd-mm-yyyy" name="arrivals" class="box" required>
  <h3>Leaving :</h3> <input type="date" placeholder="dd-mm-yyyy" name="leaving" class="box" required>
    
   <input type="submit" value="Book" name="submit" class="btn">
</form>

</div>

<!-- booking section ends -->

</body>
</html>