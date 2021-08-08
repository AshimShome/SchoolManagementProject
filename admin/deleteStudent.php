<?php
 include '../dbConnection.php';

 //$id=base64_decode($_GET['id']);
  $id=$_GET['id'];
  
  
  $picture=$_GET['picture'];
   
  

 
$delete_student=mysqli_query($conn,"DELETE FROM `students` WHERE `id`='$id'");

	 unlink('../images/student/'.$picture);

 if($delete_student){
	 
	 
	 echo "Delete SuccessFully";
	 header("location:allStudent.php");
 }else{
	 echo "Delete Error ! please try again";
	 	 header("location:allStudent.php");

 }

?>