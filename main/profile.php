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


$showpay="SELECT * FROM `payment` where email='$email'";

$resultpay=mysqli_query($conn,$showpay);


$rowpay=mysqli_fetch_assoc($resultpay);




   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   
  
    <link rel="stylesheet" href="../css/bs-css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    

  
   
     <!-- footer css-->
     <link rel="stylesheet" href="../css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">

    
    
</head>
<body>
    
    <?php include 'partial/navbar.php';?>
    
    <a type="button" class="btn btn-primary float-end mt-3 me-3" href="logout.php">Log out</a>

    <main class="page" style="min-height: 100%;">
        <section class="clean-block about-us">
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div class="col-md-12" style="margin-bottom: 25px;padding-left: 75px;font-size: 21px;margin-top: 73px;"></a></div>
            </div>
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div class="col text-center">
                    <h2 class="text-info">Profile</h2>
                    <a href="#">
          <span class="glyphicon glyphicon-log-out"></span>
        </a>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
                <div class="col-sm-6 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
                    <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/logoComedor/avatar1.jpg">
                    <div class="card-body info">
                        <div class="row" style="margin-top: -24px;">
                            <div class="col-md-12" style="margin-top: 22px;">
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong>Name</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels"><?php echo $row['name'] ;?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong>Number</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels"><?php echo $row['number'] ;?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong>Reg. N0</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels">22222</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong>Branch</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels">CSE</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong>Other</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels">Err</p>
                                    </div>
                                </div>
                                <div class="row  justify-content-center ">

                                <?php 
                                 $num=mysqli_num_rows($resultpay);
                                if($num ==0){
                                    echo ' <div class="col-md-12"  id="button_pay"><a class="btn btn-danger" role="button"  onclick="pay_now()"><i class="fas fa-pencil-alt"></i>&nbsp;Pay now</a>
                                    </div>';
                                }
                                
                                else{
                                    echo ' <div class="col-md-12"  id="button_pay_done"><a class="btn btn-success" role="button "  "><i class="fas fa-pencil-alt"></i>&nbsp;Payment Done</a>
                                    </div>';
                                }
                                ?>
                                   

                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>










<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="../js/bs-js/bootstrap.bundle.js"></script>
<!-- <script src="../js/bs-js/bootstrap.bundle.js"></script> -->

<?php 
  $num=mysqli_num_rows($resultpay);
if($num ==0){
   echo '<script type="text/JavaScript"> 

    $("#button_pay_done").css("display","none");

</script>';
}


?>




<script defer type="text/javascript">

function pay_now(){
    var name="<?php echo $row['name'] ;?>";
    var email="<?php echo $row['email'] ;?>";
    var amt="12333";
    
    //  jQuery.ajax({
    //        type:'post',
    //        url:'payment_process.php',
    //        data:{'amt':amt,
    //     'name':name,
    //     'email' :email},


        //    success:function(result){
               var options = {
                    "key": "rzp_test_pstO3z8wMrOCyS", 
                    "amount": `${amt*100}`, 
                    "currency": "INR",
                    "name": "<?php echo $row['name'] ;?>",
                    "description": "Test Transaction",
                    "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                    "handler": function (response){
                       jQuery.ajax({
                           type:'post',
                           url:'payment_process.php',
                           data:{'amt':amt,
                           'name':name,
                           'email' :email,
                            'payment_id':response.razorpay_payment_id},
                            
                         //  data:"payment_id="+response.razorpay_payment_id,
                           success:function(result){
                               window.location.href="profile.php";
                               console.log(response.razorpay_payment_id);
                           }
                       });
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
           }
//       });
    
    
// }
</script>
</body>

<?php include 'partial/footer.php';?>
</html>