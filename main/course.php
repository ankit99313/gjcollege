<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/bs-css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
   
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    

  
   
     <!-- footer css-->
     <link rel="stylesheet" href="../css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">


</head>
<body>
<?php 
include 'partial/navbar.php';
global $variable;
$variable="Course";
 include 'partial/banner.php';
?>





<div class="mx-lg-5 py-lg-5 ">
    <!-- Regular courses -->
<h5 class="ms-2" style="color:#E43C5C ;">Regular courses</h5>
<hr>
<table class="table text-center table-borderless mb-5" >
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Course name</th>
      <th scope="col">Duration</th>
      <th scope="col">Eligibilty</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>I.A / I.Sc</td>
      <td>2 Years</td>
      <td class="left-auto">10 th Pass (As per Subject)</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>B. A. /B. Sc. /B. Com.</td>
      <td>3 Years</td>
      <td>12 th Pass (As per Subject)</td>
    </tr>
  
  </tbody>
</table>


<!-- professional course -->

<h5 class="ms-2" style="color:#E43C5C ;">Professional course</h5>
<hr>
<table class="table text-center table-borderless mb-5" >
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Course name</th>
      <th scope="col">Duration</th>
      <th scope="col">Eligibilty</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>B.C.A</td>
      <td>3 Years</td>
      <td>12 th Pass ( in I.Sc )</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>B.B.M</td>
      <td>3 Years</td>
      <td>12 th Pass (As per Subject)</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>B.Sc ( IT )</td>
      <td>3 Years</td>
      <td>12 th Pass ( in I.Sc )</td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>B.Lis</td>
      <td>1 Years</td>
      <td class="align-items-lg-baseline">Graduate ( Any Subject )</td>
    </tr>
  </tbody>
</table>





<!-- ugc sponsored course -->

<h5 class="ms-2 mt-5" style="color:#E43C5C ;">U G C Sponsored course</h5>
<hr>
<table class="table text-center table-borderless" >
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Course name</th>
      <th scope="col">Duration</th>
      <th scope="col">Eligibilty</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Remedial Coaching</td>
      <td>3 Years</td>
      <td>12 th Pass ( in I.Sc )</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Services Coaching</td>
      <td>3 Years</td>
      <td>For Sc, ST, Minority And OBC</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Career Counseling Cell</td>
      <td>3 Years</td>
      <td>12 th Pass ( in I.Sc )</td>
    </tr>
  </tbody>
</table>
</div>
<?php include 'partial/footer.php';?>

<script src="../js/jquery.min.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<script src="../js/bs-js/bootstrap.bundle.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
</body>
</html>