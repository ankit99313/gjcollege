<?php
$login=true;
$showError=false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {

require 'partial/db_connect.php';
$email=$_POST["email"];
$password=$_POST["password"];

//$sql="Select * from users where username='$username' AND password='$password'";
$sql="Select * from users where email='$email'";

    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
   
    if ($num==1) {
      while($row=mysqli_fetch_assoc($result)){
        if (password_verify($password,$row['password'])) {
            $login=true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['email']=$email;
           
            header("location:profile.php");
    }
    else{
      $login=false;
    }
  }
}
    else {
      //$showError="password do not match";
      $login=false;
    }
}
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
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  
   
     <!-- footer css-->
     <link rel="stylesheet" href="../css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    
</head>
<body>
<?php include 'partial/navbar.php';?>




<?php
//   if ($login) {
   

//    echo'
//    <div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Success!</strong> You are logged in
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>
// </div>';}


if ($login==false) {

  echo'
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Wrong!</strong> Invalid credential
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button>
</div>';
}
?>







    <section class="login-clean">
        <form method="post">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" value=""></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" value=""></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a>
        </form>
    </section>
    <?php include 'partial/footer.php';?>

    <script src="../js/jquery.min.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>




   <script src="../js/bootstrap.min.js"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
    

</body>
</html>