 <!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8"/>
<title> Government primary school</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/fontawesome.min.css"/>
<link rel="stylesheet" href="../css/all.min.css"/>
<link rel="stylesheet" href="css/style.css">

</head>
<body class="jumbotron" >
<div class="container" style="margin-top:50px">
<a class="btn btn-primary pull-right" href="login.php" >Login</a>

<a class="btn btn-success pull-right" href="register.php">Register </a>

<br/>
<br/>
<br/>
<h3 class="text-center">Government primary school</h3>
<br/>
<br/>
<?php
 include 'dbConnection.php';
if(isset($_POST['show'])){
	
	$class=$_POST['selectItem'];
	$roll=$_POST['roll'];
	
	$result=mysqli_query($conn,"SELECT * FROM `students` WHERE `roll`='$roll' AND `class`='$class'");
	
	
	if(mysqli_num_rows($result)==1){
		
      $row=mysqli_fetch_assoc($result);	

	
	}else{	echo "This is wrong information!";
	header('location:index.php');
	}
}

?>

<div class="row justify-content-center">

<div class="col-sm-6 col-sm-offset-3">


<div class="table-responsive">
<table id="" class="table table-bordered table-striped table-hover">
 
 <tr>
 <th>Photo</th>
  <td> <img src="images/student/<?php echo $row['picture'];?>" width="100px"//></td>
 </tr>
 
 <tr>
 <th>Roll</th>
  <td><?php echo $row['roll'];?></td>
 </tr>
 
  <tr>
  <th>Class</th>
 <td><?php echo $row['class'];?></td>
 </tr>
 
  <tr>
 <th>Name</th>
  <td><?php echo $row['name'];?></td>
 </tr>
 
  <tr>
  <th>Father Name</th>
 <td><?php echo $row['father_name'];?></td>
 </tr>
 
  <tr>
 <th>Mother Name</th>
  <td><?php echo $row['mother_name'];?></td>
 </tr>
 
  <tr>
  <th>Phone Number</th>
 <td><?php echo $row['Phone'];?></td>
 </tr>
 
</table>

</div>
<a href="index.php" class="btn btn-primary pull-right">Refresh</a>



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