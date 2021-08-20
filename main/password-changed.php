<?php require_once "passwordcontroller.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    


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

   




    <section class="login-clean">

    <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
        <form action="login.php" method="POST">
       
        
            <div class="mb-3"><input class="form-control" type="submit" name="login-now" value="Login Now"></div>
           
        </form>
    </section>
    

    <?php include 'partial/footer.php';?>

    <script src="../js/jquery.min.js"></script>
    
   <script src="../js/bootstrap.min.js"></script>
</body>








</html>