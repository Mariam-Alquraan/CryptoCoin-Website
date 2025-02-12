<!DOCTYPE html>
<html lang="en">

<?php 
include('..\config.php');

include('adminHeader.php'); ?>

<?php

if(isset($_POST['S'])){
	$userID = $_POST['id'];
	$password = $_POST['pwd'];
	$newPassword = $_POST['nPwd'];
	$hashedPassword = md5($password);
	$hassNewPassword = md5($newPassword);
	
	$query = "update users set password = '$hassNewPassword' where userID = '$userID'";
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

<form action="update_user.php" method="post">
<label for="id">User ID:</label><br>
<input type="text" id="id" name="id"><br>

<label for="pwd">Old Password:</label><br>
<input type="password" id="pwd" name="pwd"><br>

<label for="pwd">New Password:</label><br>
<input type="newPassword" id="nPwd" name="nPwd"><br>

<br><br>
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
