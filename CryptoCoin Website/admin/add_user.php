<!DOCTYPE html>
<html lang="en">

<?php 
include('..\config.php');

include('adminHeader.php'); ?>

<?php

if(isset($_POST['S'])){
	$userName = $_POST['username'];
	$password = $_POST['pwd'];
	$userFullName = $_POST['userfullname'];
	$admin = $_POST['admin'];
	$hashedPassword = md5($password);
	
	$query = "Insert into users(userName, password, Admin, userFullName) values('$userName','$hashedPassword','$admin', '$userFullName')";
	global $conn;
	$results = mysqli_query($conn, $query);

}
?>
<body>

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<?php include('adminTopNav.php'); ?>
<?php include('adminSideNav.php'); ?>
</nav>

<div id="page-wrapper">

	<div class="container-fluid">
			<div class="col-lg-12">
<div class="col-md-12">

<form action="add_user.php" method="post">
<label for="username">Username:</label><br>
<input type="text" id="username" name="username"><br>

<label for="pwd">Password:</label><br>
<input type="password" id="pwd" name="pwd"><br>

<label for="userfullname">User Full Name:</label><br>
<input type="text" id="userfullname" name="userfullname"><br>

<label for="admin">Admin(1) or Not(0):</label><br>
<input type="text" id="admin" name="admin"><br><br><br>
<input type="submit" value="Submit" name="S">
</form>
				</div>
			</div>
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
