<?php

include 'header.php';
?>

<div class="col-sm-9 ">
<div class="content">

<h1 class="text-primary"><i class="fas fa-user"></i>User Profile</h1>
<ol class="breadcrumb">
<li class="active"><i class="fas fa-tachometer-alt"></i>Dashboard </li>&nbsp;&nbsp;
<li class=""><i class="fas fa-user"></i>User Profile</li>

</ol>

<div class="col-sm-6">
<img class="img-thumbnail" src="../images/user/<?php echo $userdata['photo']; ?>">


<form action="updateProfilePicture.php" method="POST" enctype="multipart/form-data">
<label>Profile Photo</label></br>
<input type="file" name="new_photo"/>
</br>
<input type="hidden" value="<?php echo $userdata['photo']; ?>" name="photo"/>

<input type="hidden" value="<?php echo $userdata['name']; ?>" name="name"/>

<input type="hidden" value="<?php echo $userdata['id']; ?>" name="id"/>

<input type="submit" class="btn btn-primary btn-sm" name="uplode" value="Uplode"/>
</br>
</form>

</div> &nbsp;&nbsp;


<div class="col-sm-6" >

 <?php
		   $login_user_data=mysqli_query($conn,"SELECT * FROM `users` WHERE `id`='$login_user_id'");
		    $userdata=mysqli_fetch_assoc( $login_user_data);
			//echo $userdata['name'];
		  ?>

<table id="" class="table table-bordered table-striped table-hover">
 
  <tr>
 <th>Id</th>
 <td><?php echo $userdata['id']; ?></td>
 </tr>
 
 
 <tr>
 <th>Name</th>
 <td><?php echo $userdata['name']; ?></td>
 </tr>
 
  <tr>
 <th>Email</th>
 <td><?php echo $userdata['email']; ?></td>
 </tr>
 
  <tr>
 <th>Join Date</th>
 <td><?php echo  date('d-M-Y',strtotime($userdata['time-date'])); ?></td>
 </tr>
 
</table>
<a href="editUserProfile.php?id=<?php echo $userdata['id'];?>"class="btn btn-primary btn-sm pull-right">Edit Profile</a>
</div>


</div>
</div>

<?php

include 'footer.php';
?>