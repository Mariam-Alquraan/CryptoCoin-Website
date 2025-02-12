<!DOCTYPE html>
<html lang="en">

<?php 

include('..\config.php'); 
include('adminHeader.php'); 
?>

<?php


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
<h1 class="page-header">
  Transactions

</h1>

<div class="col-md-12">

    <table class="table">
        <thead>
        <tr>
			<th>TransID</th>
			<th>UserName</th>
			<th>Amount</th>
			<th>Status</th>
			<th>TransCode</th>
			<th>Currency</th>
			<th>TransDateTime</th>
			<th>items</th>
        </tr>
        </thead>


		<tbody>
			<?php echo getAllTrans(); ?>
		</tbody>

      </table>

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
