<?php
session_start();
include("db.php");
$msg="";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password =$_POST['password'];
    $_SESSION['username'] = $username;
    $sql = "SELECT id, categoryname, description, postingdate, updationdate FROM tbl_post WHERE email = '$email' AND password = '$password'";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <script src="https://kit.fontawesome.com/d62b10e8dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="post.css">

</head>
<body>
<main>
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-n-plus-plus'></i>
      <span class="logo_name">News Portal</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="posts.php">
          <i class="fa-solid fa-newspaper"></i>
            <span class="links_name">Posts(News)</span>
          </a>
        </li>
		
		<li>
          <a href="category.php">
		  <i class='bx bx-user' ></i>
            <span class="links_name">Category</span>
          </a>
        </li>
        <li>
          <a href="sub-category.php">
		  <i class='bx bx-user' ></i>
            <span class="links_name">Sub-Category</span>
          </a>
        </li>
        <li>
			
		<a href="comments.php">
    <i class="fa-solid fa-comment"></i>
            <span class="links_name">Comments</span>
          </a>
        </li>
        
        <li>

		<a href="About Us.php">
    <i class="fa-solid fa-user"></i>
            <span class="links_name">About US</span>
          </a>
        </li>
        <li>

        <li class="log_out">
          <a href="logout.php">
          <i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      
  </div>


<div style=" width: 100%; margin-right: 5000px; ">
  	    <form action="index.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit=" return validateform() ">
			<h1>Add News</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Title:</label>
		    <input type="text" placeholder="Title..." name="title" class="form-control" id="email">
		  </div>

		  <div class="form-group">
			  <label for="comment">Description:</label>
			 <textarea class="form-control" placeholder="Description..." rows="5" name="description" id="comment"></textarea>
			</div>

			<div class="form-group">
		    <label for="email"> Date:</label>
		    <input type="date"  name="date" class="form-control" id="email">
		  </div>

           <div class="form-group">
		    <label for="email"> Image:</label>
		    <input type="file"  name="thumbnail" class="form-control img-thumbnail" id="email">
		  </div>

		    <div class="form-group">
		    <label for="email"> Category:</label>

		     
               
		        <select class="form-control"  name="category" >
		       <?php
                include('db/connection.php');
                  $query=mysqli_query($conn,"select * from category");

                while($row=mysqli_fetch_array($query)){
   	
                	?>
		        	 <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
		        	 
                 <?php } ?>
		        </select>
		        </div>

		  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
		</form>
		<script>
			
       function validateform(){
         var x = document.forms['categoryform']['title'].value;
         var y = document.forms['categoryform']['description'].value;
         var z = document.forms['categoryform']['date'].value;
         var w = document.forms['categoryform']['category'].value;
         if (x=="") {
          	alert('Title Must Be Filled Out !');
          	return false;
          }
          if (y=="") {
          	alert('Description Must Be Filled Out !');
          	return false;
          }
           if (y.length<10) {
          	alert('Description Atleast 100 character !');
          	return false;
          }
          
       }
 
		</script>

  </div>
</main>
  <?php

  

include('db.php');
if (isset($_POST['submit'])) {
	$title=$_POST['title'];
	$description=$_POST['description'];
		$date=$_POST['date'];

			$thumbnail=$_FILES['thumbnail']['name'];
			$tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
				$category=$_POST['category'];
				$admin=$_SESSION['email'];
			move_uploaded_file($tmp_thumbnail,"images/$thumbnail");

     $query1=mysqli_query($conn,"INSERT INTO tbl_post(id, posttitle, categoryid, subcategoryid, postdetails, postingdate, updationdate,postimage) values ('$title','$description','$date','$category','$thumbnail','$admin')");
     if ($query1) {
     	# code...
     	echo "<script>alert('News uploaded Successfully !!')</script>  ";
      header('Location:index.php');
     }else{
     	echo "<script>alert('Please Try Again!!')</script>  ";
       header('Location:posts.php');

     }

}

  ?>

</body>
</html>

