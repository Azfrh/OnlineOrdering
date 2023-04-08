<?php
//Start session
session_start();


include("dbconnect.php");

$customer_id = $_POST['customer_id'];
$customer_password= $_POST['customer_password'];

$sql1 = "SELECT * FROM user WHERE customer id = '$customer_id'"; //username exist ke tak
$result1 = mysqli_query($conn, $sql1); // run statement $sql1
$row1 = mysqli_fetch_array($result1);
$count1 = mysqli_num_rows($result1);

if($count1 > 0) //customer id wujud
{
    if($customer_password == $row1['password']) //kalau password betul
    {
        $_SESSION['fuser'] = session_id();
        $_SESSION['fuser'] = $fuser;
        header('Location: Menupage.php'); //page lepas login

    }
    else
    {
        header("Location: loginpage.php?invalid=true");
    }
}
else //customer id tak wujud
{
    header("Location: loginpage.php?takde=true");
}


/*
$result = $sql->get_result();
if($row = $result->fetch_assoc())    //user found
{
  if($customer_password=='Abu12')
  {
    $_SESSION['customer_id'] = session_id();
    $_SESSION['customer_password'] = $fusername;
    header('Location: customerdataregister.php');         //customer
  }
  else
  {
    $pass= password_verify($fpwd, $row['us_pass']);
    if($pass)
    {
      $_SESSION['customer_id'] = session_id();
      $_SESSION['fusername'] = $fusername;
      header('Location: customerdataregister.php');         //customer
    }
    else
    {
      header("Location: loginpage.php?invalid=true");
    }
  }
}
  
else
{
  header("Location: loginpage.php?err=true");
}
  
//Close database connection
mysqli_close($conn);
?>
