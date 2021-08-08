<?php

include 'header.php';

 $id=$_GET['id'];
 
 //echo $id;
$edit_user_profile_data=mysqli_query($conn,"SELECT * FROM `users` WHERE `id`='$id'");
$row=mysqli_fetch_assoc($edit_user_profile_data);



if(isset($_POST['editUserProfile'])){
	
    $name =$_POST['name'];
	$email=$_POST['email'];
	
	

	$result=mysqli_query($conn,"UPDATE `users` SET `name`='$name',`email`='$email' WHERE `id`='$id'");
			  if($result){
				  $success= "Data Update Success";
			 //move_uploaded_file($_FILES['profile_picture']['tmp_name'],'../images/student/'.$profile_picture);
                   	 	 header("location:userProfile.php");
			 
			
			 
			 
			  }else{ $error= "Data Update error!";
			      header("location:userProfile.php");

			  }
			  
}
?>

<div class="col-sm-9 ">
<div class="content">

<h1 class="text-primary"><i class="fas fa-edit"></i>Edit User profile</h1>
<ol class="breadcrumb">
<li class="active"><i class="fas fa-tachometer-alt"></i>Dashboard </li>&nbsp;&nbsp;
<li class=""><i class="fas fa-edit"></i>Edit User profile</li>

</ol>
<div class="row justify-content-center"> 
 
 <div class="col-sm-4 col-sm-offset-4"><?php if(isset($success)){echo $success;}?></div>
  <div class="col-sm-4 col-sm-offset-4"><?php if(isset($error)){echo $error;}?></div>

 
 </div>

<h3 class="text-center">Edit User profile Form </h3>
<div class="row justify-content-center">

<div class="col-sm-4 col-sm-offset-4">

  <form action="" method="POST" enctype="multipart/form-data">

  
<div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="<?= $row['name'];?>" required">
  </div>
  
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="<?= $row['email'];?>" required">
  </div>
  
  <div  class="text-center">
    <button type="reset" class="btn btn-danger text-center">Cancle</button>

  <button type="submit" name="editUserProfile" class="btn btn-primary text-center">Save</button>
  </div>
</form>



</div>
</div>


</div>
</div>


<?php

include 'footer.php';
?>