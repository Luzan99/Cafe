
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
    <title>gallery</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- header section starts  -->
    <?php include('header.php'); ?>
<!-- header section ends  -->
<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading"> our food <span> gallery </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/food/g-1.jpg" alt="">
        </div>
        <div class="box">
            <img src="images/food/g-2.jpg" alt="">
        </div>
        <div class="box">
            <img src="images/food/g-3.jpg" alt="">
        </div>
        <div class="box">
            <img src="images/food/g-4.jpg" alt="">
        </div>
        <div class="box">
            <img src="images/food/g-5.jpg" alt="">
        </div>
        <div class="box">
            <img src="images/food/g-6.jpg" alt="">
        </div>
        <div class="box">
            <img src="images/food/g-7.jpg" alt="">
        </div>
        <div class="box">
            <img src="images/food/g-8.jpg" alt="">
        </div>
    </div>
    <div class="view">
    <a href="menu.php" class="btn">View all menu</a>
</div>
</section>

<!-- gallery section ends -->
<!-- footer section starts  -->
<?php include ('footer.php'); ?>
<!-- footer section ends -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>