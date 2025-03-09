<?php

@include 'config.php';

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
   <title>Prakash Store - About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>Why choose us?</h3>
         <p>Prakash Store provides complete organic and healthy food solutions, allowing customers to grow and eat organic, fresh, and healthy food with the best quality items in town. Further, Prakash Store offers quick and easy payment services, ensuring secure ways to pay. Quick, easy, and efficient!</p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>What do we provide?</h3>
         <p>We offer island-wide delivery services 24/7 to engage our customers. No extra charge added—just a free way to provide more convenience and an effortless shopping experience.</p>
         <a href="shop.php" class="btn">Our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="project images/aa.jfif" alt="">
         <p>Highly satisfied with the products—highly recommended. Fresh fruits, fresh veggies, fresh meat—really satisfied with the goodies.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>William Blake</h3>
      </div>

      <div class="box">
         <img src="project images/ad.jfif" alt="">
         <p>Convenient shopping and easy collaboration with the store! Good job! The meat and vegetables were really fresh as mentioned.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>            
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Jane Nichole </h3>
      </div>

      <div class="box">
         <img src="project images/aj.jfif" alt="">
         <p>The experience was really worthwhile. The products were sold at reliable prices—easy and fresh products. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Jenny Kim</h3>
      </div>

      <div class="box">
         <img src="project images/qw.jfif" alt="">
         <p>The products were delivered faster than expected. Highly recommend the quality, humbleness, and cooperation of the store staff.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Edward Leo</h3>
      </div>

      <div class="box">
         <img src="project images/ew.jfif" alt="">
         <p>Highly satisfied with the products—highly recommended. Fresh fruits, fresh veggies, fresh meat—really satisfied with the goodies.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Shawn Debb</h3>
      </div>

      <div class="box">
         <img src="project images/ag.jfif" alt="">
         <p>The experience was really worthwhile. The products were sold at reliable prices—easy and fresh products. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Denise Soong</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
