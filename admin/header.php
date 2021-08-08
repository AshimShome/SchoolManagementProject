<?php
session_start();
 include '../dbConnection.php';

if(!isset($_SESSION['login_id'])){
	   header('location:../login.php');
}
$login_user_id=$_SESSION['login_id'];
?>

 <!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8"/>
<title> Government primary school</title>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/fontawesome.min.css" />
<link rel="stylesheet" href="../css/all.min.css"/>
<link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" href="../css/style.css"/>

<script type="text/javascript" src ="../js/jquery-3.5.1.js"></script>
<script type="text/javascript" src ="../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src ="../js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src ="../js/script.js"></script>






<link rel="stylesheet" href="../css/style.css">

</head>
<body class="">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand text-primary" href="index.php"><i class="fas fa-graduation-cap"></i>Government primary school</a>
    
    <div class="" id="navbarNav">
      <ul class="navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link text-primary active" aria-current="page" href="#"><i class="fas fa-user"></i>
		  
		  <?php
		   $login_user_data=mysqli_query($conn,"SELECT * FROM `users` WHERE `id`='$login_user_id'");
		    $userdata=mysqli_fetch_assoc( $login_user_data);
			echo $userdata['name'];
		  ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary active" href="../register.php"><i class="fas fa-user-plus"></i>Add user</a>
        </li>
		<li class="nav-item">
          <a class="nav-link text-primary active" href="userProfile.php"><i class="fas fa-user"></i>My profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary active" href="logout.php"><i class="fas fa-power-off"></i>Exit</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>



<div class="container-fluid ">

<div class="row ">

<div class="col-sm-3  ">

<div class="list-group ">
          <a class="list-group-item active" href="index.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
		   <a class="list-group-item  " href="addStudent.php"><i class="fas fa-user-plus"></i>Add student</a>

           <a class="list-group-item  " href="allStudent.php"><i class="fas fa-user-graduate"></i>All Student</a>

	      <a class="list-group-item  " href="allUser.php"><i class="fas fa-users"></i>All user</a>


   </div>


</div>