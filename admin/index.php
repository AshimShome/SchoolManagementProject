<?php

include 'header.php';
$student_table=mysqli_query($conn,"SELECT * FROM `students`");
$student_count=mysqli_num_rows($student_table);

$user_table=mysqli_query($conn,"SELECT * FROM `users`");
$user_count=mysqli_num_rows($user_table);
?>
<div class="col-sm-9 ">
<div class="content">

<h1 class="text-primary"><i class="fas fa-tachometer-alt"></i>Dashboard <small>Staticthis Area</small></h1>
<ol class="breadcrumb"><li class="breadcrumb-item active"><i class="fas fa-tachometer-alt"></i>Dashboard</li></ol>


<div class="row">
<div class="col-sm-4">
<div class="card card-primary">
<div class="card-body">
<div class="row">
<div class="col-sm-6">
<div class="pull-left">
<i class="fas fa-users fa-5x"></i>

</div>
</div>

<div class="col-sm-6">
<div class=" text-center">
<div style="font-size:45px;">
<?php echo $user_count?> <br/>
<h6>All user</h6>
</div>

</div>
</div>


</div>
</div>

<div class="card-footer text-muted">

<a href="allUser.php">
<div class="row">
<div class="col-sm-6">

<div class="text-left">
See all users
</div>
</div>
<div class="col-sm-6">
<div class="text-right">
<i class="fas fa-tachometer-alt"></i>
</div>
</div>

</div>
</a>
</div>


</div>
</div>




<div class="col-sm-4">
<div class="card card-primary">
<div class="card-body">
<div class="row">
<div class="col-sm-6">
<div class="pull-left">
<i class="fas fa-user-graduate fa-5x"></i>

</div>
</div>

<div class="col-sm-6">
<div class=" text-center">
<div style="font-size:45px;">
<?php echo $student_count?> <br/>
 
<h6>All stuents</h6>
</div>

</div>
</div>


</div>
</div>

<div class="card-footer text-muted">

<a href="allStudent.php">
<div class="row">
<div class="col-sm-6">

<div class="text-left">
See all stuents
</div>
</div>
<div class="col-sm-6">
<div class="text-right">
<i class="fas fa-tachometer-alt"></i>
</div>
</div>

</div>
</a>
</div>


</div>
</div>



<div class="col-sm-4">
<div class="card card-primary">
<div class="card-body">
<div class="row">
<div class="col-sm-6">
<div class="pull-left">
<i class="fas fa-users fa-5x"></i>

</div>
</div>

<div class="col-sm-6">
<div class=" text-center">
<div style="font-size:45px;">
60 <br/>
<h6>Default</h6>
</div>

</div>
</div>


</div>
</div>

<div class="card-footer text-muted">

<a href="">
<div class="row">
<div class="col-sm-6">

<div class="text-left">
See all Default
</div>
</div>
<div class="col-sm-6">
<div class="text-right">
<i class="fas fa-tachometer-alt"></i>
</div>
</div>

</div>
</a>
</div>


</div>
</div>


</div>
</div>
</div>

<?php

include 'footer.php';
?>