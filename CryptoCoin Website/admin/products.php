

<?php 
include('..\config.php');
include('adminHeader.php'); ?>

<!DOCTYPE html>
<html lang="en">
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include('adminTopNav.php'); ?>
        <?php include('adminSideNav.php'); ?>
        </nav>
		
        <div id="page-wrapper">

            <div class="container-fluid">

             <div class="row">

<h1 class="page-header">
   All Products

</h1>
<table class="table table-hover">


    <thead>
      <tr>
           <th>Name</th>
           <th>Description</th>
           <th>Price</th>
           <th>Category</th>
           <th>Stock</th>
      </tr>
    </thead>
    <tbody>
<?php

echo getAllItemsFromDB(); 

?>


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
