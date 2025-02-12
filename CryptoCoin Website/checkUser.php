<?php
include('config.php');
session_start();
$username = $_GET['username'];
$password = $_GET['password'];

$hashedPassword = md5($password);
$query = "select * from users where userName = '$username' and password = '$hashedPassword'or password ='$password'";

$results = mysqli_query($conn, $query);

if(mysqli_affected_rows($conn) < 1){
	echo "Failed Username or Password";
}else{
	$row = mysqli_fetch_array($results);
	$_SESSION['user'] = $username;
	$_SESSION['userType'] = $row['Admin'];
	//echo "Succeeded username or Password<br/>";
	//print_r($_SESSION);
	if($row["Admin"] == 1)
		header("Location:admin/index.php");
	else
		header("Location:index.php");
}


?>