<?php

include 'header.php';
if(isset($_POST['StudentAdd'])){
	$roll=$_POST['rollNum'];
	$class=$_POST['class'];
    $name =$_POST['name'];
	$fatherName=$_POST['fatherName'];
	$motherName=$_POST['motherName'];
	$phoneNumber=$_POST['phoneNumber'];
	
	$picture=explode('.',$_FILES['profile_picture']['name']);
     $endNam=end($picture);
	 $profile_picture= $name.'.'.$endNam;
	 
	$result=mysqli_query($conn,"INSERT INTO `students`(`roll`, `class`, `name`, `father_name`, `mother_name`, `Phone`, `picture`) 
				VALUES ('$roll','$class','$name','$fatherName','$motherName','$phoneNumber','$profile_picture')");
			  if($result){
				  $success= "Data insert Success";
			 move_uploaded_file($_FILES['profile_picture']['tmp_name'],'../images/student/'.$profile_picture);

			 
			 
			  }else{ $error= "Data insert error!";
			  
			  }
			  
}
?>

<div class="col-sm-9 ">
<div class="content">

<h1 class="text-primary"><i class="fas fa-user-plus"></i>Add Student</h1>
<ol class="breadcrumb">
<li class="active"><i class="fas fa-tachometer-alt"></i>Dashboard </li>&nbsp;&nbsp;
<li class=""><i class="fas fa-user-plus"></i>Add Studen</li>

</ol>
<div class="row justify-content-center"> 
 
 <div class="col-sm-4 col-sm-offset-4"><?php if(isset($success)){echo $success;}?></div>
  <div class="col-sm-4 col-sm-offset-4"><?php if(isset($error)){echo $error;}?></div>

 
 </div>

<h3 class="text-center">Add Student Form </h3>
<div class="row justify-content-center">

<div class="col-sm-4 col-sm-offset-4">

  <form action="" method="POST" enctype="multipart/form-data">

<div class="mb-3">
    <label  class="form-label">Roll Number</label>
    <input type="text" name="rollNum" class="form-control" required  pattern="[0-9]{4}">
  </div>
  
  <div class="mb-3">
   <label  class="form-label">Class</label>
<select class="form-control" name="class" required>
<option value="">Choose</option>
<option value="Class One">Class One</option>
<option value="Class Tow">Class Tow</option>
<option value="Class Three">Class Three</option>
<option value="Class Four">Class Four</option>
<option value="Class Five">Class Five</option>
</select>
  </div>

<div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control" required">
  </div>
  
  <div class="mb-3">
    <label  class="form-label">Father Name</label>
    <input type="text" name="fatherName" class="form-control" required">
  </div>
  
   <div class="mb-3">
    <label  class="form-label">Mother Name</label>
    <input type="text" name="motherName" class="form-control" required">
  </div>
  

  <div class="mb-3">
    <label  class="form-label">Phone Number</label>
    <input type="tel" name="phoneNumber" class="form-control" required  pattern="[0-9]{11}">
  </div>
 
  <div class="mb-3">
    <label class="form-label">Profile Picture</label>
    <input type="file" name="profile_picture" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp">
  </div>
  
  <div  class="text-center">
    <button type="reset" class="btn btn-danger text-center">Cancle</button>

  <button type="submit" name="StudentAdd" class="btn btn-primary text-center">Add Student</button>
  </div>
</form>



</div>
</div>


</div>
</div>


<?php

include 'footer.php';
?>