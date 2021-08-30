<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/bs-css/bootstrap.min.css">

<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="../css/navbar.css">

     <!-- footer css-->
     <link rel="stylesheet" href="../css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">

    <style>
        a:hover{
            text-decoration: none;
        }
    </style>

</head>
<body>


<?php 
include 'partial/navbar.php';
?>










<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header  text-white" style="background: #E43C5C;"><i class="fa fa-envelope"></i> Contact us.
                </div>
                <div class="card-body">
                    <form method="POST" action="contactbackend.php">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="subject" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn text-right" style="background-color: #E43C5C ;color:white;">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 mt-4  mt-md-0">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
                    <p>Sri Gadadhar Acharya Janta College</p>
                    <p>Rambagh, Bihta (Patna)</p>
                    <p>Pin - 801103</p>
                    <p>Email : gjcollegebihta@gmail.com</p>
                    <p>Mob: + 91-8804681871, 9934615246, 8873977587, 8340175837</p>

                </div>

            </div>
        </div>
    </div>
</div>

<script src="../js/jquery.min.js"></script>

<?php include 'partial/footer.php';?>

<script src="../js/bs-js/bootstrap.bundle.js"></script>
</body>
</html>