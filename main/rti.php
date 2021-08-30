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

    

  
    <link rel="stylesheet" href="../css/carousel.css">
     <!-- footer css-->
     <link rel="stylesheet" href="../css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">

    <style>

 
.download a{
  border: solid 1px #e6e6e6;
  background: #f2594b;
  text-decoration: none;
  color: white;
  font-size: 11px;
		font-weight: 700;
		line-height: normal;
		padding: 5px 10px;
    border-radius: 6px;
    text-transform: uppercase;
}
      
    </style>


</head>
<body>
<?php include 'partial/navbar.php';?>
<?php include 'partial/slider.php';?>


<table class="table m-auto" style="width: 90%;">
  <thead  style="background-color: #E43C5C; color: white;">
    <tr>
      <th scope="col" class="sm">S.NO</th>
      <th scope="col" >FILE_NAME</th>
      <th scope="col" class="text-center">VIEW FILE</th>
      <th scope="col" class="text-center">DOWNLOAD</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td class="text-center download">
    
    	<a href="../assets/1.pdf" target="_blank">View</a>
    
    </td>
      <td class="text-center download">
        <a href="href="../assets/1.pdf" download="file"">download</a>  
  
  </td>
    
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td class="text-center">Thornton</td>
      <td class="text-center">@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td class="text-center">the Bird</td>
      <td class="text-center">@twitter</td>
    </tr>
  </tbody>
</table>












<?php include 'partial/footer.php';?>

<script src="../js/jquery.min.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<!-- bootstrap js -->
<script src="../js/bs-js/bootstrap.bundle.min.js"></script>

<script src="../js/owl.carousel.min.js"></script>






</body>
</html>