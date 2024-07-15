<?php

include 'connect.php';

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
    <title>home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts      -->

<?php include 'header.php'; ?>

<!-- header section ends-->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Our Top Selling dish</span>
                    <h3>Whole Grilled Checken</h3>
                    <p>The best food and best place is waiting. Come and enjoy with your friends , family , classmates, colleagues and loved ones .</p>
                    <a href="menu.php" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/food/home-img-2.png" alt="">
                </div>
            </div>
        </div>


    </div>

</section>

<!-- home section ends -->
<!-- dishes section starts  -->
<?php include('dishes.php'); ?>
<!-- dishes section ends  -->

<!-- footer section starts  -->
<?php include ('footer.php'); ?>
<!-- footer section ends -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>