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
<main><form action="submit-form.php" method="POST" class="registerFields">
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
  </div>
  
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>
  
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
  </div>
  
  <div class="form-group">
    <label for="confirm-password">Confirm Password:</label>
    <input type="password" id="confirm-password" name="confirm-password" required>
  </div>
  
  <button type="submit">Submit</button>
</form></main>

            
    

</body>
</html>


