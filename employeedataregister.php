<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1); 
include 'config.php'; 
 
$sql="INSERT INTO employee (employee_id, employee_name, employee_address, employee_phone, employee_position, employee_password) 
values ('$_POST[employee_id]','$_POST[employee_name]','$_POST[employee_address]','$_POST[employee_phone]','$_POST[employee_position]','$_POST[employee_password]')"; 
 if (!mysqli_query($conn,$sql)){ 
   
  die ('Error: ' .mysqli_error($conn)); 
 } 
 
 
echo "<script 
type='text/jscript'>alert('Register employee has been submitted!')</script>"; 
header('refresh:1 url=register.php'); 
?>