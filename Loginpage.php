<?php  
 
session_start();  
 
include "config.php"; 
 
if (isset($_POST['uname']) && isset($_POST['password'])) { 
 
    function validate($data){ 
       $data = trim($data); 
       $data = stripslashes($data); 
       $data = htmlspecialchars($data); 
       return $data; 
    } 
 
    $uname = validate($_POST['uname']); 
    $pass = validate($_POST['password']); 
 
    if (empty($uname)) { 
        header("Location: index.php?error=Email is required"); 
        exit(); 
    } 
    else if(empty($pass)){ 
        header("Location: index.php?error=Password is required"); 
        exit(); 
    } 
    else{ 
 
        $sql = "SELECT * FROM customer WHERE customer_email='$uname' AND customer_password='$pass'"; 
 
        $result = mysqli_query($conn, $sql); 
 
        if (mysqli_num_rows($result) === 1) { 
            $row = mysqli_fetch_assoc($result); 
            if ($row['manager_email'] === $uname && $row['manager_password'] === $pass) { 
                echo "Logged in!"; 
                $_SESSION['manager_email'] = $row['manager_email']; 
                $_SESSION['manager_password'] = $row['manager_password']; 
                $_SESSION['manager_name'] = $row['manager_name']; 
                $_SESSION['manager_id'] = $row['manager_id']; 
                header("Location: home.php"); 
                exit(); 
 
            } 
            else{ 
                header("Location: index.php?error=Incorect Email or Password"); 
                exit(); 
            } 
 
        }else{ 
            header("Location: Loginform.php?error=Incorect Email or Password"); 
            exit(); 
        } 
    } 
 
}else{ 
    header("Location: Loginform.php"); 
    exit(); 
} 
 
?>