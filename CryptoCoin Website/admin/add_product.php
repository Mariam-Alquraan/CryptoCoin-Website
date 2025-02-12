<!DOCTYPE html>
<html lang="en">

<?php 
include('..\config.php');
include('adminHeader.php');
?>


<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include('adminTopNav.php'); ?>
        <?php include('adminSideNav.php'); ?>
        </nav>
		
		<?php
		
		if(isset($_POST['save'])){
			global $conn;
			$cat = explode("--",$_POST["product_category"]);
			$cat=trim($cat[0]);
			$query = "Insert into utilities (util_id,util_name, util_desc,  util_pri, ser_util_id, util_img, uti_qty) values ('$_POST[product_id]','$_POST[product_title]','$_POST[product_description]',$_POST[product_price],$cat,0,$_POST[product_quantity])";
			
		
			
			$result = mysqli_query($conn, $query);
			if(mysqli_affected_rows($conn) > 0)
				echo "Item saved successfully";
		}
		?>
		
		
        <div id="page-wrapper">

            <div class="container-fluid">






<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Add Product

</h1>
</div>
               


<form action="add_product.php" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="product-title">Product Title </label>
        <input type="text" name="product_title" class="form-control">
       
    </div>


    <div class="form-group">
           <label for="product-title">Product Description</label>
      <textarea name="product_description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>

	<div class="form-group row">

      <div class="col-xs-3">
        <label for="product-id">Product ID</label>
        <input type="number" name="product_id" class="form-control" size="60">
      </div>
    </div>

    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Product Price</label>
        <input type="number" name="product_price" class="form-control" size="60">
      </div>
    </div>

<div class="form-group row">

      <div class="col-xs-3">
        <label for="product-quantity">Product Quantity</label>
        <input type="number" name="product_quantity" class="form-control" size="60">
      </div>
    </div>


    
    

</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

     
     <div class="form-group">
       <input type="submit" name="save" class="btn btn-warning btn-lg" value="Save">
    </div>


     <!-- Product Categories-->

    <div class="form-group">
         <label for="product-title">Product Category</label>
          <hr>
        <select name="product_category" id="" class="form-control">
            <option value="">Select Category</option>
           <?php
		   echo getServicesT();
		   ?>
        </select>
	</div>

</aside><!--SIDEBAR-->
    
</form>



                



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
