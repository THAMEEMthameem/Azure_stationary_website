<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h2>about us</h2>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
      <img src="images/pic-1.png" alt="">
         <h3>why choose us?</h3>
         <p>"Stationery brings creativity to life, with every stroke of a pen or pencil."
"From elegant notebooks to colorful pens, our stationary collection inspires imagination."
"Explore our range of stationery essentials for work, school, or personal expression."</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>This stationary website stands out for its user-friendly interface and intuitive navigation. Browsing through the extensive collection of products is a breeze, and I appreciate how easy it is to find exactly what I'm looking for.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Akash</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I absolutely love the variety of stationery products available on this website! From stylish notebooks to unique pens, I always find something special to add to my collection. The quality is excellent, and the ordering process is smooth and hassle-free.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Abdul</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>As an artist, I rely on high-quality art supplies to bring my creations to life, and this stationary website never disappoints. The selection of art pens, sketchbooks, and drawing pencils is fantastic, and the prices are very competitive. Plus, the shipping is always fast and reliable.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Guna</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>