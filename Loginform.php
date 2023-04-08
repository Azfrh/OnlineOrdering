<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="976fa72b7728fcaf8b56a0e6826ff868.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="Customer_id"><b></b></label>
    <input type="text" placeholder="Enter Customer id" id="customer_id" required>

    <label for="customer_password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="customer_password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
