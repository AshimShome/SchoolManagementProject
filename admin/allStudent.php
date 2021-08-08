<?php

include 'header.php';
?>

<div class="col-sm-9 ">
<div class="content">

<h1 class="text-primary"><i class="fas fa-user-graduate"></i>All Student</h1>
<ol class="breadcrumb">
<li class="active"><i class="fas fa-tachometer-alt"></i>Dashboard </li>&nbsp;&nbsp;
<li class=""><i class="fas fa-user-graduate"></i>All Student</li>

</ol>


<div class="table-responsive">



<table id="" class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
	  <th scope="col">Roll</th>
	  <th scope="col">Class</th>
      <th scope="col">Name</th>
	  <th scope="col">Father Name</th>
	  <th scope="col">Mother Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Photo</th>
      <th scope="col">Join Date</th>
	  <th scope="col">Action</th>
	  
    </tr>
  </thead>
  <tbody>
  <?php
  $students=mysqli_query($conn,"SELECT * FROM `students`");
  
  
  while($row=mysqli_fetch_assoc($students)){
  
  ?>
    <tr>
     <td><?php echo $row['roll']; ?></td>
      <td><?php echo $row['class']; ?></td>
      <td><?php echo $row['name']; ?></td>
	  <td><?php echo $row['father_name']; ?></td>
      <td><?php echo $row['mother_name']; ?></td>
	   <td><?php echo $row['Phone']; ?></td>
      <td><img width="100px" src="../images/student/<?php echo $row['picture'];?>"/></td>
	  <td><?php echo date('d-M-Y',strtotime($row['date_time'])); ?></td>
	  <td>
	  <a href="editStudent.php?id=<?php echo $row['id'];?>" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i>Edit</a>
	  	  <a  href="deleteStudent.php?id=<?php echo $row['id'] ?>&picture=<?php echo $row['picture'];?>" class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>

	  </td>
	 


	  
	   
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