<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DE</title>

   <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
   <!--header section starts-->

   <header class="header">
           <div class="logo">
            <h2> Dream <span>Escape</span></h2>
         </div>
            


            <nav class="navbar">
                
                <a href="#home">Home</a>
                <a href="#services">Services</a>
                <a href="#about">About</a>
                <a href="#review">Review</a>
                <a href="#contact">Contact</a>
                <a href="admin/login.html"><input type="submit" name="submit" value="Admin" class="admin-btn" ></a>
            </nav>
          
             <div class="icons">
                 <div class="fas fa-bars" id="menu-btn"></div>
                 <div class="fas fa-user" id="login-btn"></div>
             </div>
   <form action="" class="login-form">
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">update profile</a>
      <a href="index.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
      <p>new <a href="index.php">login</a> or <a href="register.php">register</a></p>
   </div>

</div>
</form>

</header>
<!--header section ends-->

<!--home section starts -->
   
<section class="home" id="home" style="background: url(img/home.jpg) no-repeat; background-position: center; background-size: cover;">

   <div class="content" >
      <h3>Travel Arround the <span>world</span></h3>

      <p>“Remember that happiness is a way of travel, not a destination.”</p>
      
      <a href="place.html" class="btn">Explore</a>
   </div>

</section>

<!--home section ends-->

<!--Services section starts-->

<section class="services" id="services">
   
   <div class="heading">
       <h1><span>S</span>ervices</h1>
   </div>
   
       <div class="box-container">
   
   
           <div class="box">
                <i><img src="img/icon-1.png" alt=""></i>
               <h3>Adventure</h3>
              
           </div>
   
           <div class="box">
            <i><img src="img/icon-2.png" alt=""></i>
               <h3> tour guide</h3>
              
           </div>
   
           <div class="box">
            <i><img src="img/icon-3.png" alt=""></i>
               <h3>trekking</h3>
              
           
           </div>
   
           <div class="box">
            <i><img src="img/icon-4.png" alt=""></i>
               <h3>camp fire</h3>
               
           </div>
   
           <div class="box">
            <i><img src="img/icon-6.png" alt=""></i>
               <h3>camping</h3>
              
           </div>
   
       </div>
   
   </section>
   
   <!--Services section ends-->


<!--About us Section starts-->

<section class="about" id="about">
   <h3><span>A</span>bout</h3><br>
   
<div class="about1">

    <marquee behavior="alternate" direction="right"><img src="img/about-img.jpg" alt="" height="200" width="400" style="padding: 25px 10px ;"></marquee> 
   <p>DreamEscape Travels - Indian travel agency/tour operators to fulfill your complete travel requirement. Find travel in India, Sri Travels offers you various choices at the little amount backed by a good service. We offer you Indian Travel Package,
      No matter what your age is, no matter what type of trips do you prefer, we have everything that suits your comfort. There is nothing better than exploring your own country with an experience like never before. Our team works hard all the time in order to make your trip amazing and the fun never ending. Our country India is very well known for its diversity, diversity in everything, whether you have a love for Hilly areas, you love to visit spiritual places, or you have that taste of experiencing the rich and royal life, we have that package that is made for you only. </p>

   
</div>

</section>

<!--About us section ends-->

<!--review section starts-->

<section class="review" id="review">

   <h3><span>R</span>eviews</h3>
  
   <div class="box-container">

      <div class="box">
       <img src="img/pic-1.png" alt="">
       <h2>Roger Ricks</h2>
       <p>When I decided to purchase, the process was painless, and he explained everything to me.  I believe that I paid a fair price for what I bought and would definitely recommend him and his business to anyone looking to purchase a used car.</p>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
      </div>
      
      <div class="box">
       <img src="img/pic-2.png" alt="">
       <h2>Maddie Bussler</h2>
       <p> Great experience! The owner made sure I was taken care of and everything was right before I drove off the lot.</p>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
      </div>

      <div class="box">
       <img src="img/pic-3.png" alt="">
       <h2>T.J. Rhodes</h2>
       <p>When I decided to purchase, the process was painless, and he explained everything to me.</p>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
      </div>

      <div class="box">
       <img src="img/pic-4.png" alt="">
       <h2>Roger Ricks</h2>
       <p>I believe that I paid a fair price for what I bought and would definitely recommend him and his business to anyone looking to purchase a used bike.</p>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
      </div>

      <div class="box">
       <img src="img/pic-1.png" alt="">
       <h2>Maddie Bussler</h2>
       <p>Great experience! The owner made sure I was taken care of and everything was right before I drove off the lot.</p>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
      </div>

      <div class="box">
       <img src="img/pic-2.png" alt="">
       <h2>T.J. Rhodes</h2>
       <p>When I decided to purchase, the process was painless, and he explained everything to me.</p>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
      </div>
   </div>

</section>

<!--review section ends-->

<!--contact section starts-->

<section class="contact" id="contact"> 

   <h1><span>C</span>ontact Us</h1>

   <div class="row">

       <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.552248776!2d77.49085479367392!3d12.954294594448116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1638028399814!5m2!1sen!2sin"  allowfullscreen="" loading="lazy"></iframe>


       <form action="contact.php"  method="post">
       
           <h3>Get in Touch</h3>
           <input type="text" name="name" placeholder="Name" class="box" required>
           <input type="email" placeholder="e-mail" name="email" class="box" required>
           <input type="number" placeholder="phone" name="phone" class="box" required>
           <textarea placeholder="Message" name="message" class="box" cols="30" rows="10"></textarea>
           <input type="submit" value="Send" name="submit" class="btn">
       </form>

   
   </div>


</section>

<!--Contact section ends-->

<!--footer section strts-->

<section class="footer">

   <div class="box-container">

       <div class="box">
           <h3><span>B</span>ranches</h3>
           <a href=""><i class="fas fa-map-marker-alt"></i>Bangaluru</a>
           <a href=""><i class="fas fa-map-marker-alt"></i>Mysore</a>
           <a href=""><i class="fas fa-map-marker-alt"></i>Hasan</a>
           <a href=""><i class="fas fa-map-marker-alt"></i>Mandya</a>

       </div>
     
       <div class="box">
           <h3><span>Q</span>uick links</h3>
           <a href="#home" class="link"><i class="fas fa-arrow-right"> Home</i></a>
           <a href="#services" class="link"><i class="fas fa-arrow-right"> Services</i></a>
           <a href="#about" class="link"><i class="fas fa-arrow-right"> About</i></a>
           <a href="#review" class="link"><i class="fas fa-arrow-right"> Review</i></a>
           <a href="#contact" class="link"><i class="fas fa-arrow-right"> Contact</i></a>
       </div>

       <div class="box">
           <h3><span>C</span>ontact us</h3>
           <a href="#"><i class="fas fa-phone"> +91 9367475636</i></a>
           <a href="#"><i class="fas fa-phone"> +91 9647583645</i></a>
           <a href="#"><i class="fas fa-envelope"> mdsghfj133@gmail.com</i></a>
           <a href="#"><i class="fas fa-map-marker-alt"> Bangaluru -560064</i></a>
       </div>
       <div class="box">
           <h3><span>F</span>ollow</h3>
           <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"> facebook</i></a>
           <a href="https://www.instagram.com/"><i class="fab fa-instagram"> instagram</i></a>
           <a href="#"><i class="fab fa-twitter"> twitter</i></a>

       </div>

   </div>
 <div class="credit"> <-- Created by --> <h3> <br> <span>S</span>rivani N 
 
   
 </div>
</section>

<!--footer section ends-->

<script src="script.js"></script>
</body>
</html>