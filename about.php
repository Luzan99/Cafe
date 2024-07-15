<?php

include 'connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- header section starts  -->
    <?php include('header.php'); ?>
<!-- about section ends  -->

<section class="about" id="about">
    <h1 class="heading"> why choose us? </h1>

    <div class="row">

        <div class="image">
            <img src="images/food/about-img.png" alt="">
        </div>

        <div class="content">
            <h3>Best Food In The Country</h3>
            <p>Ordering food have been an integral part of the service industry in this modern era. We deliver to your footsteps with delicious food and quick service. Our motto is <b>'Great food and quick service'</b> for our customers. Try us and experience our ambience.</p>
             <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Fast delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>Quick service</span>
                </div>
            </div>
            <p>To know more about the items/foods click the button below. Thank you!</p>
         <a href="menu.php" class="btn">Click Here!</a>
        </div>

    </div>

</section>

<!-- about section ends -->

  <!-- footer section starts  -->
  <?php include('footer.php'); ?>
<!-- footer section ends  -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>