 <?php
 session_start();
 
 include 'dbConnection.php';
 
 if(isset($_SESSION['login_id'])){
	   header('location:admin');
}
 if(isset($_POST['login'])){
	 
	 $email=$_POST['email'];
	 $password=$_POST['password'];
	 
	 $email_ck=mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$email'");
	 
	 //print_r($email_ck);
	 if(mysqli_num_rows($email_ck)>0){
		 
		 $row= mysqli_fetch_assoc($email_ck);
		 
		 if($row['password']==$password){
			 $_SESSION['login_id']=$row['id'];
			 header('location:admin');
			 
			 
		 }else{$pass_error="Wrong password !";}
		 
	 }else{$email_error="Wrong Email Id !";}
	 
 }
 
 ?>


 <!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8"/>
<title> Government primary school</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/fontawesome.min.css" />
<link rel="stylesheet" href="../css/all.min.css"/>
<link rel="stylesheet" href="css/style.css">

</head>
<body class="jumbotron" >
<div class="container" style="margin-top:50px">

<a class="btn btn-primary " href="index.php">Home </a>

<a class="btn btn-success pull-right" href="register.php">Register </a>

<br/>
<br/>
<br/>
<h3 class="text-center">User Login Form</h3>
<div class="row justify-content-center">

<div class="col-sm-4 col-sm-offset-4">
<form action="" method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email"class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
	<span class="error"><?php if(isset($email_error)){echo $email_error;}?></span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" required class="form-control" id="exampleInputPassword1">
	
		<span class="error"><?php if(isset($pass_error)){echo $pass_error;}?></span>

  </div>
 <div  class="text-center">
  <button type="submit" name="login" class="btn btn-primary text-center">Login</button>
  </div>
  
  
  

  
</form>
</form>



</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<foter class="text-center"><p>All Right Reserved &copy;2018-<?php echo date("Y");?>Government primary school</P></foter>
</div>


<script src="js/bootstrap.min.js"></script>
</body>
</html> 