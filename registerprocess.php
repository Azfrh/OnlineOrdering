<?php
//Start session
 
include('dbconnect.php');
 $fuser=$_POST['fuser'];  //username
 $fname = $_POST['fname'];
$fpwd = $_POST['fpwd'];
$femail = $_POST['femail'];
$fphone = $_POST['fphone'];

$sql1 = "INSERT INTO user (username, password, name, email, phone, role) 
VALUES ('$fuser','$fpwd','$fname','$femail','$fphone', '2')"; //public
$result1 = mysqli_query($conn, $sql1);

if($result1)
{
    echo "<script> alert('Registration successful! ');window.location.href = 'loginpage.php'</script>";
    //header("Location: homepage.php?success=true");
}
else
{
    
    echo "<script> alert('Failed to register! ');window.location.href = 'register.php'</script>";

}

mysqli_close($conn);

?>