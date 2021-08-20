<?php
    session_start();
    if (!isset($_SESSION['loggedinadmin'])|| $_SESSION['loggedinadmin']!=true) {
      header("location: login.php");
      exit;
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


<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>






<a type="button" class="btn btn-primary float-end my-md-1" href="logout.php">Log out</a>


<div class="my-4">        
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">amount</th>
                <th scope="col">payment_id</th>
                <th scope="col">Date</th>
                
               
                
                
            </tr>
        </thead>
        <tbody>
            <?php
       require '../main/partial/db_connect.php';
        $sq= "SELECT * FROM `payment`";
        $result=mysqli_query($conn, $sq);
       $sno=0;
   while($row=mysqli_fetch_assoc($result)){
       
      
       $sno=$sno+1;

       ?>
      
 
     <tr>
   
  
    <th scope='row'><?php echo $sno; ?></th>

    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['amount']; ?></td>
    <td><?php echo $row['payment_id']; ?></td>
    
   
    <td><?php echo $row['added_on']; ?></td>
    
  
 
    

    
</tr>
    
  <?php }
  ?>





        </tbody>
    </table>
    </div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
  

        <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

        <script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
        </script>
        
        
        <script>

(function() {
    var allimgs = document.images;
    for (var i = 0; i < allimgs.length; i++) {
        allimgs[i].onerror = function() {
            this.style.visibility = "hidden"; // Other elements aren't affected. 
        }
    }
})();
</script>
        

</body>
</html>