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
         <h3>Why to choose us?</h3>
         <p>Prakash Store Provides Complete Organic And Healthy Food Solutions, Which Allows The Customers To Grow And Eat Organic, Fresh And Healthy Food With The Best Quality And Items In Town. Further, Prakash Store Provides Features For Quick And Easy Payments Services Aiming To Deliver Goods In Secure Ways To Pay. Quick, Easy And Efficient!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>What do we provide?</h3>
         <p>We Have Island Wide Delivery Services 24/7 To Engage Our Customers. No Extra-Charge Added Just A Free Way For More Convenience And Provides An Effortless Shopping Experience.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
