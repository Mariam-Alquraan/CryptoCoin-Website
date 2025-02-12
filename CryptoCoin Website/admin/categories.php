<!DOCTYPE html>
<html lang="en">

<?php 

include('..\config.php'); 
include('adminHeader.php'); 
?>

<?php
if(isset($_POST['AddCat'])){
	$catName = $_POST['category'];
	$id = $_POST['id'];
	$query = "Insert into service(ser_id,ser_name) values('$id','$catName')";
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
<h1 class="page-header">
  Product Categories

</h1>


<div class="col-md-4">
    
    <form action="categories.php" method="post">
    
        <div class="form-group">
            <label for="category-title">Title</label>
            <input type="text" class="form-control" name="category">
        </div>
		<div class="form-group">
            <label for="category-id">ID</label>
            <input type="text" class="form-control" name="id">
        </div>

        <div class="form-group">
             
            <input type="submit" name="AddCat" class="btn btn-primary" value="Add Category">
        </div>      


    </form>


</div>


<div class="col-md-8">

    <table class="table">
            <thead>

        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>
            </thead>


    <tbody>
        <?php echo getAllServices(); ?>
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
