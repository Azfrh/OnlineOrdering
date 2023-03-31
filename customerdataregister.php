<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1); 
include 'config.php'; 
 
$sql="INSERT INTO customer (customer_id, customer_name, customer_address, customer_phone, customer_password) 
values ('$_POST[customer_id]','$_POST[customer_name]','$_POST[customer_address]','$_POST[customer_phone]','$_POST[customer_password]')"; 
 if (!mysqli_query($conn,$sql)){ 
   
  die ('Error: ' .mysqli_error($conn)); 
 } 
 
 
echo "<script 
type='text/jscript'>alert('Register agent has been submitted!')</script>"; 
header('refresh:1 url=register.php'); 
?>