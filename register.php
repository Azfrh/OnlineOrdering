<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{font: 14px verdana; } 
        body{display:flex; flex-direction:column; justify-content:center; align-items:center;}
        .wrapper{ width: 360px; padding: 20px; border:2px solid Black; }   

    </style>
</head>

<body style="background-color:hsla(0, 100%, 50%, 0.1);">

    <img src="Vegan Chocolate Cake With Whipped Ganache.jpg" alt="" width="270" height="200">>

    <div class="wrapper">
        <h2>Register Account</h2>
        <p>Please fill in your credentials to create account.</p>
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="customerdataregister.php" method="post">
            <div class="form-group">
                <label>customer id</label>
                <input type="text" id="customer_id" name="customer_id" size="20" placeholder="Enter customer id" required>
                
            </div>    
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" id="customer_name" name="customer_name" size="20" placeholder="Enter full name" required>
                
            </div>    

            <div class="form-group">
                <label>Address</Address></label>
                <input type="text" id="customer_address" name="customer_address" size="20" placeholder="Enter full name" required>
            </div> 

            <div class="form-group">
                <label>Phone no</label>
                <input type="text" id="customer_phone" name="customer_phone" size="20" placeholder="Enter full name" required>
                
            </div> 
            <div class="form-group">
                <label>Password</label>
                <input type="password" size="20" name="customer_password" id="customer_password" placeholder="Enter password" required>
            </div>
           
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Create Account">
            </div>
            <p>Already have an account? <a href="loginpage.php">Login now</a>.</p>

        </form>
    </div>
  
</body>
</html>