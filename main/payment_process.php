<?php
session_start();
require 'partial/db_connect.php';
if(isset($_POST['amt']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['payment_id'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $payment_id=$_POST['payment_id'];
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($conn,"insert into payment(name, email, amount,payment_id,added_on) values('$name','$email','$amt','$payment_id','$added_on')");
    $_SESSION['OID']=mysqli_insert_id($conn);
}


// if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
//     $payment_id=$_POST['payment_id'];
//     mysqli_query($conn,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
// }
?>