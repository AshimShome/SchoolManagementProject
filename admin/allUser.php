<?php

include 'header.php';
?>

<div class="col-sm-9 ">
<div class="content">

<h1 class="text-primary"><i class="fas fa-users"></i>All User</h1>
<ol class="breadcrumb">
<li class="active"><i class="fas fa-tachometer-alt"></i>Dashboard </li>&nbsp;&nbsp;
<li class=""><i class="fas fa-users"></i>All User</li>

</ol>


<div class="table-responsive">



<table id="" class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
	  <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Photo</th>
      <th scope="col">Join Date</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $users=mysqli_query($conn,"SELECT * FROM `users`");
  
  
  while($row=mysqli_fetch_assoc($users)){
  
  ?>
    <tr>
     <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><img width="100px" src="../images/user/<?php echo $row['photo'];?>"/></td>
	  <td><?php echo date('d-M-Y',strtotime($row['time-date'])); ?></td>
    </tr>
	
   <?php } ?>
  
  </tbody>
</table>





</div>
</div>
</div>

<?php

include 'footer.php';
?>