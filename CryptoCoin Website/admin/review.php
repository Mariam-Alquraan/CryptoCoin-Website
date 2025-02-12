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
		 </nav>

        <div id="page-wrapper">

            <div class="container-fluid">



                    <div class="col-lg-12">
                      

                        <h1 class="page-header">
                            Reviews
                         
                        </h1>
                          <p class="bg-success">
                            
                        </p>

                        
<div class="col-md-12">

<table class="table table-hover">
	<thead>
		<tr>
			<th>User name</th>
			<th>Review</th>
			<th>Prodect Name</th>
		</tr>
	</thead>
	<tbody>

	<?php 
	$results = getReview();
	while($row = mysqli_fetch_array($results)){
	?>

		<tr>

			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['Rev']; ?></td>
			<td><?php echo $row['util_name']; ?></td>

			
			
			

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
