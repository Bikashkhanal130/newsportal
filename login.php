<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
    <h2>NewsPortal</h2>
<nav>
            <a href="index.php">Home</a>
            <a href="aboutus.php">About</a>
            <a href="contactus.php">Contact</a>
            <a href="login.php">Log in</a>
            <a href="userregister.php">Register</a>          
</header>
<main><form action="submit-form.php" method="POST" class="registerFields">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>
  
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
  </div>
  
  <!-- <div class="form-group">
    <label for="confirm-password">Forgot Password:</label>
    <input type="password" id="forgot-password" name="forgot-password" required>
  </div> -->
 
  <button type="submit">Log In</button>
  <br>
  <br>
  <button type="submit">Forgot password?</button>

  
</form></main>

            
    

</body>
</html>