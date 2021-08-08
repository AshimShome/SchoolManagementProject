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
<div class="row justify-content-center">

<div class="col-sm-4 col-sm-offset-4">
<form action="student_info.php" method="POST">
<table class="table table-bordered table-responsive">
<tr>
<td  colspan="2"class="text-center"><label>Student Information Portal</label></td>
</tr>

<tr>
<td><label>Choose Class</label></td>
<td>
<select name="selectItem" class="form-control" required>
<option value="">Choose</option>
<option value="Class One">Class One</option>
<option value="Class Tow">Class Tow</option>
<option value="Class Three">Class Three</option>
<option value="Class Four">Class Four</option>
<option value="Class Five">Class Five</option>
</select>
</td>
</tr>

<tr>
<td><label>Roll No</label></td>
<td><input type="text" name="roll"class="form-control" placeholder="Class Roll"required pattern="[0-9]{4}"  /></td>

</tr>
<tr>
<td colspan="2" class="text-center"><input type="submit" value="Show Info" class="btn btn-primary" name="show"/></td>

</tr>
</table>
</form>


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