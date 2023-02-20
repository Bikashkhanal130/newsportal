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
<html>
<head>
	<title>News Portal</title>
	<link rel="stylesheet" href="loginuser.css">
</head>
<body>
	<header>
		<h1>News Portal</h1>
	</header>
	<main>
		<section class="card">
			<h2>Add Post</h2>
			<p>Content for Add Post goes here</p>
		</section>
		<section class="card">
			<h2>Delete Post</h2>
			<p>Content for Delete post goes here</p>
		</section>
		<section class="card">
			<h2>Category</h2>
			<p>Content for category goes here</p>
		</section>
	</main>
</body>
</html>
