<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

$id = $_GET['id'];
$total_price = $_GET['grand_total'];

?>



Redirecting to esewa ...

<form action="https://uat.esewa.com.np/epay/main" method="POST" style="display: none">
    <input value="<?php echo $total_price;?>" name="tAmt" type="hidden">
    <input value="<?php echo $total_price;?>" name="amt" type="hidden">
    <input value="0" name="txAmt" type="hidden">
    <input value="0" name="psc" type="hidden">
    <input value="0" name="pdc" type="hidden">
    <input value="epay_payment" name="scd" type="hidden">
    <input value="<?php echo $id;?>" name="pid" type="hidden">
    <input value="http://localhost/food%20website/esewa_payment_success.php" type="hidden" name="su">
    <input value="http://localhost/food%20website/esewa/esewa_payment_failed.php" type="hidden" name="fu">
    <input type="submit" value="Pay by esewa" class="btn" id="paymentButton" name="order_btn">
</form>   

<!-- custom js file link  -->
<!-- <script src="js/script.js"></script> -->
<script>
    window.onload = (event) => {
        document.getElementById("paymentButton").click();
    }
</script>

</body>
</html> 