<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="userregister.css">
</head>
<body>

    <header>
    <h2>NewsPortal</h2>
<nav>
            <a href="index.php">Home</a>
            <a href="aboutus.php">About</a>
            <a href="contactus.php">Contact</a>
            <a href="login.php">Log In</a>
            <a href="userregister.php">Register</a>
            
</nav>
</header>
<main>
<div class="contain">
  <div class="form-group">
    <br>
    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" id="Username" required>
  </div>
  
  <div class="form-group">
  <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
  </div>
  
  <div class="form-group">
  <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
  </div>
  
  <div class="form-group">
  <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
  </div>

  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
  <div class="form-group">
    <br>
  <button type="submit"><a href="final.php">Register</a></button>
</div>
 
<div class="signin">
<p>Already have an account? <a href="login.php">Sign in</a>.</p>
</div>

</form>
</main>
</div>
</body>
</html>


