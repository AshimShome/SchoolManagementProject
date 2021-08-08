<?php
 include '../dbConnection.php';
//$photo_name=$_GET['photoName'];


//for image Delete
//unlink('../images/user/'.$_GET['photoName']);
 
  //header("location:userProfile.php");
  
  if(isset($_POST['uplode'])){
	  
	  
	 $id= $_POST['id'];
	 $photo= $_POST['photo'];
	$name= $_POST['name'];
	
	
	unlink('../images/user/'.$photo);


	  
	$new_photo=explode( ".", $_FILES['new_photo']['name']);  
	$exp=end($new_photo);
	
	$photo_name=$name.'.'.$exp;
	
	$update=mysqli_query($conn,"UPDATE `users`SET`photo`='$photo_name'WHERE `id`='$id'");
	
	if($update){
		 move_uploaded_file($_FILES['new_photo']['tmp_name'],'../images/user/'.$photo_name);
		 header("location:userProfile.php");
	}else{}
	 
  }


?>