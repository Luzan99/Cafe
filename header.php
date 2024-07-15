<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->


<header class="header">

   <div class="flex">

   <a href="home.php" class="logo"><i class="fas fa-utensils"></i>Jhhigu:cafe</a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="gallery.php">Gallery</a>
         <a href="about.php">About</a>
         <a href="menu.php">Menu</a>
         <a href="review.php">Review</a>
         <a href="orders.php">Order</a>
      </nav>

      <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <a href="search.php" class="fas fa-search"></a>
        <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE User_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
        <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
        <a href="logout.php" class="fas fa-power-off"></a>
    </div>

</header>

<!-- header section ends-->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>