<?php
    session_start();
    require 'partial/db_connect.php';
    if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true) {
      header("location: login.php");
      echo $_SESSION['id'];
      exit;
    }
  
//$id=$_SESSION['id'];
$email= $_SESSION['email'];
$showsql ="SELECT * FROM `users` where email='$email'"; 
$result=mysqli_query($conn,$showsql);
$row=mysqli_fetch_assoc($result);

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs-css/bootstrap.min.css">
    <link rel="stylesheet" href="css/profile.css">

      <!-- footer css-->
      <link rel="stylesheet" href="css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <script src="https://kit.fontawesome.com/8ea186a044.js" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/8ea186a044.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'partial/navbar.php';?>

<main class="page" style="min-height: 100%;">
        <section class="clean-block about-us">
        <div class="row" style="margin-right: 0px;margin-left: 0px;">
        <div class="col-md-12" style="margin-bottom: 25px;padding-left: 75px;font-size: 21px;margin-top: 73px;"></a></div>
            </div>
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div class="col text-center">
                    <h2 class="text-info">Profile</h2>
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
                                            <p class="labels"><?php echo $row['email'] ;?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="labels"><strong>Mobile</strong></p>
                                        </div>
                                        <div class="col">
                                            <p class="labels">6622971893</p>
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
                                    <div class="row">
                                        <div class="col-md-12"><a class="btn btn-success" role="button" href="editProfile.html"><i class="fas fa-pencil-alt"></i>&nbsp;Editar</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="bs-js/bootstrap.bundle.js"></script>
</body>

<?php include 'partial/footer.php';?>
</html>