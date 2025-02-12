<!DOCTYPE html>
<html lang="en">
<?php include("header.php"); ?>
<?php include_once("config.php"); ?>
<?php include("navBar.php"); ?>
<?php
session_start();
// Your sign-up form processing logic goes here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $full = $_POST["full"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Validate input (you can add more validation logic here)

    // Check if passwords match
    if ($password === $confirmPassword) {
        // Hash the password
        $hashedPassword = md5($password);

        $query = "insert into users(userName,userFullName,password) values ('$username','$full','$hashedPassword') ";
		$results = mysqli_query($conn, $query);
		$query = "select * from users where userName = '$username' and password = '$password'";
		$results = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($results);
		$_SESSION['user'] = $username;
		$_SESSION['userType'] = $row['Admin'];
	
		if($row["Admin"] == 1)
			header("Location:admin/index.php");
		else
			header("Location:index.php");

       
    } else {
        // Passwords do not match, handle accordingly (e.g., show an error message)
         echo "Passwords do not match";
		// header("Location: signup.php");
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
		form {
			margin: 50px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        h2 {
            color: #16D5FF;
        }

        label {
            display: block;
            text-align: left;
            margin: 15px 0 5px 0;
            color: #138C8C;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
        }

        button {
            background-color: #16D5FF;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #138C8C;
        }

        a {
            color: #16D5FF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="signup.php" method="post">
        <h2>Sign Up</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="fullName">Full Name:</label>
        <input type="text" id="full" name="full" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <button type="submit">Sign Up</button>
        
        <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
	<?php include("footer.php"); ?>
<!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
