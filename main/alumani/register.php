<?php
$showAlert=false;
$showError=false;
$exists=false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {

require '../partial/db_connect.php';
$email=$_POST["email"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$stream=$_POST["stream"];


//check wheather this username exists or not
$existsql="SELECT * FROM `alumani` WHERE email='$email'"; 
$result=mysqli_query($conn,$existsql);
$numExitRows=mysqli_num_rows($result);
if ($numExitRows>0) {
  $exists=true;
}
else
{
 // $exists=false;
  


    $sql="INSERT INTO `alumani` ( `name` ,`email`, `phone` ,`stream`) VALUES ('$name',  '$email', '$phone', $stream)";
    $result=mysqli_query($conn,$sql);
    if ($result) {
       $showAlert=true;
    }
   
else{
 // $showError="password do not match or useranme already exist";
 $showError=true;
 
}
}}

?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="../../css/bs-css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/registration.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="../../bs-css/bootstrap.css">
    <link rel="stylesheet" href="../../css/navbar.css">


   
      <!-- footer css-->
      <link rel="stylesheet" href="../../css/Footer-Dark.css">
    <link rel="stylesheet" href="../../assets/fonts/ionicons.min.css">
</head>

<body>

<?php include '../partial/navbar.php';?>



<?php
  if ($showAlert) {
   echo'
   <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Registered successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';}

if ($exists) {
  echo'
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Error!</strong> User already exists.
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button>
</div>';}

if ($showError) {
   echo'
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Something went wrong.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
 </div>';

}

?>







    <section class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center"><strong>Alumani</strong> registration</h2>
                <div class="mb-3"><input class="form-control" type="email" name="email" required placeholder="Email"></div>
                <div class="mb-3"><input class="form-control" type="name" name="name" required placeholder="name"></div>
                <div class="mb-3"><input class="form-control" type="number" name="phone" required placeholder=phone"></div>
                <div class="mb-3"><input class="form-control" type="text" name="stream" required placeholder="Stream"></div>
                <div class="mb-3">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Register</button></div><a class="already" href="login.php">You already have an account? Login here.</a>
            </form>
        </div>
    </section>


    <script src="../../js/jquery.min.js"></script>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <?php include '../partial/footer.php';?>
    <script src="../../js/bootstrap.min.js"></script>

  
</body>

</html>