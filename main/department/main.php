<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bs-css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/fonts/ionicons.min.css">
  
    <link rel="stylesheet" href="../../css/navbar.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   
     <!-- footer css-->
     <link rel="stylesheet" href="../../css/Footer-Dark.css">
    <link rel="stylesheet" href="../../assets/fonts/ionicons.min.css">



    <style>
        a {
            
            text-decoration: none;
        }

        .list-group-item-action > a:hover{
           color: blue;
           
        }
        .list-group-item-action > a{
            letter-spacing: 2.5px;
            text-decoration: none;
            font-size: 18px;
            font-weight: 400;
            color: #E43C5C;
        }
        .list-group{
            
            justify-content: center;
            align-items: center;
        }
        .list-group >li{
            list-style-type: none;
           
           
        }
    </style>
</head>

<body>

<?php 
include '../partial/navbar.php';
global $variable;
$variable="Department";
 include '../partial/banner.php';
?>


<!-- 
    <div>
        <img src="../../assets/img/architects-and-worker.jpg" alt="Image" class="w-100" style="aspect-ratio: 16/5;">
    </div> -->

    <div class="container-fluid">
        <div class="row g-0 p-5  align-items-center justify-content-center">
            <div class="col-sm-6 d-flex align-items-center  flex-column">
                <a>Scinece</a>
                <img src="../../assets/img/architects-and-worker.jpg" alt="" style="width: 200px;aspect-ratio: 4/3;">
            </div>

           
            <div class="col-sm-4 ">
                <ul class="list-group  mt-3  ms-sm-5 align-items-sm-start">
                    <li class=" list-group-item-action"><a href="department-view.php?sub=Physics">Physics</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=Chemistry">Chemistry</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=Maths">Maths</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=Biology">Biology</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=Zoologoy">Zoologoy</a></li>
                   
                </ul>
            </div>
    </div>
<hr class="w-75 m-auto">

    <div class="row g-0 p-5  align-items-center justify-content-center">
            <div class="col-sm-6 d-flex align-items-center  flex-column">
                <a>Arts</a>
                <img src="../../assets/img/architects-and-worker.jpg" alt="" style="width: 200px;aspect-ratio: 4/3;">
            </div>

           
            <div class="col-sm-4 ">
                <ul class="list-group  mt-3  ms-sm-5 align-items-sm-start">
                    <li class=" list-group-item-action"><a href="department-view.php?sub=History">History</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=Political">Political Science</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=Economics">Economics</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=Sociology">Sociology</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=Philosophy">Philosophy</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=Psychology">Psychology</a></li>
                   
                </ul>
            </div>
    </div>

    <hr class="w-75 m-auto">
    <div class="row g-0 p-5  align-items-center justify-content-center">
            <div class="col-sm-6 d-flex align-items-center  flex-column">
                <a>Commerce</a>
                <img src="../../assets/img/architects-and-worker.jpg" alt="" style="width: 200px;aspect-ratio: 4/3;">
            </div>

           
            <div class="col-sm-4 ">
                <ul class="list-group  mt-3  ms-sm-5 align-items-sm-start">
                    <li class=" list-group-item-action"><a href="department-view.php?sub=Commerce">Commerce</a></li>
                  
                   
                </ul>
            </div>
    </div>

    <hr class="w-75 m-auto">
    <div class="row g-0 p-5  align-items-center justify-content-center">
            <div class="col-sm-6 d-flex align-items-center  flex-column">
                <a>Humanities</a>
                <img src="../../assets/img/architects-and-worker.jpg" alt="" style="width: 200px;aspect-ratio: 4/3;">
            </div>

           
            <div class="col-sm-4 ">
                <ul class="list-group  mt-3  ms-sm-5 align-items-sm-start">
                    <li class=" list-group-item-action"><a href="department-view.php?sub=Hindi">Hindi</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=English">English</a></li>
                  
                   
                </ul>
            </div>
    </div>
    <hr class="w-75 m-auto">

    <div class="row g-0 p-5  align-items-center justify-content-center">
            <div class="col-sm-6 d-flex align-items-center  flex-column">
                <a>Vocational course</a>
                <img src="../../assets/img/architects-and-worker.jpg" alt="" style="width: 200px;aspect-ratio: 4/3;">
            </div>

           
            <div class="col-sm-4 ">
                <ul class="list-group  mt-3  ms-sm-5 align-items-sm-start">
                    <li class=" list-group-item-action"><a href="department-view.php?sub=BCA">BCA</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=BBM">BBM</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=BSC">BSC-II</a></li>
                    <li class="list-group-item-action"><a href="department-view.php?sub=BLIS">BLIS</a></li>
                   
                </ul>
            </div>
    </div>
    <hr class="w-75 m-auto">
    </div>

    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bs-js/bootstrap.bundle.min.js"></script>
    
    <?php include '../partial/footer.php';?>

    
    <script src="../../js/owl.carousel.min.js"></script>
    
   
</body>

</html>