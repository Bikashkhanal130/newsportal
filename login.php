<?php
session_start();
include("db.php");
$msg="";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password =$_POST['password'];
    $_SESSION['username'] = $username;
    $sql = "SELECT id, email,username, password FROM tbl_admin WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    

    if ($result->num_rows == 1) {
        $_SESSION['USER_ID']=$row['id'];
        $_SESSION['email'] = $row['email'];      
        header('Location:index.php');
    } else {
        
        $msg="Please enter Valid Details!";
        
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <title>NewsPortal - log in or sign up</title>
</head>
<body>
    <main>
        <div class="container-fluid content">
            <div class="container">
                <div class="row">
                    <div class="col-6 harry">
                    </div>
  
                            <div class="row username">
                                <div class="col">
                                        <label for="username" class="email">E-mail*</label><br/>
                                        <input type="email" id="useremail" name="email" class="input-email" title="Enter your e-mail" required/>
                                </div>
                            </div>
                            <div class="row password">
                                <div class="col">
                                    <label for="password" class="pass">Password*</label><br/>
                                    <input type="password" id="password" name="password" class="input-pass" title="Enter your password" required/>
                                </div>
                            </div>
                            <div class="row login-btn">
                                <div class="col">
                                 <form action="loginuser.php" method="post">
                                 <button type="submit"><u><a href="loginuser.php"></a></u>Login</button>
                        </form>   
                               
                                    <p class="forgot"><u><a href="forgotpassword.php">Forgot your password?</a></u></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>