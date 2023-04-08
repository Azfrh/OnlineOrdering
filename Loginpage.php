<?php  
 
session_start();  
 
include "config.php"; 
 
if (isset($_POST['customer_id']) && isset($_POST['customer_password'])) { 
 
    function validate($data){ 
       $data = trim($data); 
       $data = stripslashes($data); 
       $data = htmlspecialchars($data); 
       return $data; 
    } 
 
    $customer_id = validate($_POST['customer_id']); 
    $customer_password = validate($_POST['customer_password']); 
 
    if (empty($customer_id)) { 
        header("Location: customerdataregister.php?error=Email is required"); 
        exit(); 
    } 
    else if(empty($customer_password)){ 
        header("Location: customerdataregister.php ?error=Password is required"); 
        exit(); 
    } 
    else{ 
 
        $sql = "SELECT * FROM customer WHERE customer_id='$customer_id' AND customer_password='$customer_passsword'"; 
 
        $result = mysqli_query($conn, $sql); 
 
        if (mysqli_num_rows($result) === 1) { 
            $row = mysqli_fetch_assoc($result); 
            if ($row['customer_id'] === $customer_id && $row['customer_password'] === $customer_passsword) { 
                echo "Logged in!"; 
                $_SESSION['customer_id'] = $row['customer_name']; 
                $_SESSION['customer_address'] = $row['customer_phone']; 
                $_SESSION['customer_password'];
                header("Location: Menupage.php"); 
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