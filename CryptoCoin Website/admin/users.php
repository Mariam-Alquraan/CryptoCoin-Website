<!DOCTYPE html>
<html lang="en">

<?php 
include('..\config.php');

include('adminHeader.php'); ?>


<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include('adminTopNav.php'); ?>
        <?php include('adminSideNav.php'); ?>
		<?php

if(!isset($_SESSION['user']))						
	header('Location:..\login.php');

?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">



                    <div class="col-lg-12">
                      

                        <h1 class="page-header">
                            Users
                         
                        </h1>
                          <p class="bg-success">
                            
                        </p>

                        <a href="add_user.php" class="btn btn-primary">Add User</a>
						<a href="modify_user.php" class="btn btn-primary">Modify Admin</a>
						<a href="update_user.php" class="btn btn-primary">Update Password</a>

<div class="col-md-12">

<table class="table table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Admin</th>
		</tr>
	</thead>
	<tbody>

	<?php 
	$results = getAllUsers();
	while($row = mysqli_fetch_array($results)){
	?>

		<tr>

			<td><?php echo $row['userID']; ?></td>
			<td><?php echo $row['userName']; ?></td>
			<td><?php 
			if($row['Admin'] == 1)
				echo "Yes";
			else
				echo "No";	
			
			
			?></td>
			
			

		</tr>


	<?php } ?>


                                    
                                    
                                </tbody>
                            </table> <!--End of Table-->
                        

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
