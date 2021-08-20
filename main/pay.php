<?php
    session_start();
    require 'partial/db_connect.php';
    if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true) {
      header("location: login.php");
      exit;
    }
  
//$id=$_SESSION['id'];
$email= $_SESSION['email'];
$showsql ="SELECT * FROM `users` where email='$email'"; 
$result=mysqli_query($conn,$showsql);
$row=mysqli_fetch_assoc($result);
$apikey="rzp_test_pstO3z8wMrOCyS";

   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apikey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="100" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
   
    // Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Gj college"
    data-description="A college website"
    data-image="<?php echo 'https://www.csecoder.com/images/CSECODE.png'; ?>"
    data-prefill.name="<?php echo $row['name'] ;?>"
    data-prefill.email="<?php echo $row['email'] ;?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

</body>
</html>