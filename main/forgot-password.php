<?php require_once "passwordcontroller.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
   
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
        <form action="forgot-password.php" method="POST" autocomplete="">
            <h2 class="visually-hidden">Forget password</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <p class="text-center">Enter your email address</p>
            <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" required value="<?php echo $email ?>"></div>
         
           
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" name="check-email" value="Continue">Continue</button></div>
        </form>
    </section>
    

    <?php include 'partial/footer.php';?>

    <script src="../js/jquery.min.js"></script>
    
   <script src="../js/bootstrap.min.js"></script>
</body>
</html>