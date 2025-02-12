<?php
session_start();

if(!isset($_SESSION['user']))						
	header('Location:..\login.php');

?> 

<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="index.php">SB Admin</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
  <li class="dropdown">
		<a href="..\index.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
		
		<?php echo $_SESSION["user"]; ?>
		</a>
		
			<li class="divider">
			
				<a href="sessionDelete.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
			</li>
		
	</li>
</ul>