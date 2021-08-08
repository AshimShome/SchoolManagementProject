 <?php
 include 'dbConnection.php';
 
 if(isset($_POST['register'])){
	 
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $password=$_POST['password'];
	 $confirm_password=$_POST['confirm_password'];
	 
	 
	 $profile_picture=explode('.',$_FILES['profile_picture']['name']);
	 $ext=end($profile_picture);
	  $profile_picture_name=$name.'.'.$ext;
	  
	  //print_r($_FILES);
	  
	 // exit();
    if(!$name==""){
		if(!$email==""){
			
				if(!$password==""){
					if(!$confirm_password==""){
			
			         
					 
			        if(strlen($password)>7){
						 if($password==$confirm_password){
						
						$sql_val=mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$email'");
					 
					 if(mysqli_num_rows($sql_val)==0){
						 
						 $result=mysqli_query($conn,"INSERT INTO `users`(`name`, `email`, `password`, `photo`) VALUES ('$name','$email','$password','$profile_picture_name')");
						 if($result){
							 $success= "Data insert successfully";
							 
							 move_uploaded_file($_FILES['profile_picture']['tmp_name'],'images/user/'.$profile_picture_name);
							 
							 
							 
						 }else{
						$error= "Data insert error !";

						 }
					 }else{$email_exist="This email is already Exists";}
					}else{$pasNot_mass="Password dose not mass ";}
					}else{$len_pas="Password must be 8 carecter ";}
		}else{$confirm_password_nul=  "This confirm_password fild is required ";}
			
		}else{$password_nul=  "This password fild is required ";}
			
		}else{$email_nul=  "This email fild is required ";}
		
	}else{$name_nul= "This name fild is required ";}	 
	 
	 
 }
 
 
 

 
 ?>
 
 
 
 
 <!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8"/>
<title> Government primary school</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="../css/fontawesome.min.css" />
<link rel="stylesheet" href="../css/all.min.css"/>
<link rel="stylesheet" href="css/style.css">

</head>
<body class="jumbotron" >
<div class="container" style="margin-top:50px">

<a class="btn btn-primary pull-left " href="index.php">Home </a>

<a class="btn btn-primary pull-right" href="login.php" >Login</a>

<br/>
<br/>
<br/>
 <div class="row justify-content-center"> 
 
 <div class="col-sm-4 col-sm-offset-4"><?php if(isset($success)){echo $success;}?></div>
  <div class="col-sm-4 col-sm-offset-4"><?php if(isset($error)){echo $error;}?></div>

 
 </div>
<h3 class="text-center">User Registration Form </h3>
<div class="row justify-content-center">

<div class="col-sm-4 col-sm-offset-4">

<form action="" method="POST" enctype="multipart/form-data">
<div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control"  id="exampleInputEmail1"  aria-describedby="emailHelp">
	<span class="error"><?php if(isset($name_nul)){echo $name_nul;}?></span>
  </div>
<div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp">
		<span class="error"><?php if(isset($email_nul)){echo $email_nul;}?></span>
		<span class="error"><?php if(isset($email_exist)){echo $email_exist;}?></span>


  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputPassword1">
		<span class="error"><?php if(isset($password_nul)){echo $password_nul;}?></span>
		<span class="error"><?php if(isset($len_pas)){echo $len_pas;}?></span>


  </div>
  <div class="mb-3">
    <label  class="form-label">Confirm Password</label>
    <input type="password" name="confirm_password"  class="form-control" id="exampleInputPassword1">
		<span class="error"><?php if(isset($confirm_password_nul)){echo $confirm_password_nul;}?></span>
		<span class="error"><?php if(isset($pasNot_mass)){echo $pasNot_mass;}?></span>


  </div>
 
  <div class="mb-3">
    <label class="form-label">Profile Picture</label>
    <input type="file" name="profile_picture" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp">
  </div>
  
  <div  class="text-center">
    <button type="reset" class="btn btn-danger text-center">Cancle</button>

  <button type="submit" name="register" class="btn btn-primary text-center">Register</button>
  </div>
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