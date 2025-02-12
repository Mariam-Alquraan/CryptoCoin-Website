<?php 
//session_start();
//session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<?php 
include_once("config.php");
include_once("header.php");
include_once("cart.php");
?>

<body>

    <?php  
	include("navBar.php"); 
	?>


    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">

      <h1 class="m-4 text-center text-primary">Thank You !!</h1>
      <h2 class="m-4 text-center text-primary">Your payment for the following items was successful</h2>

<?php 

	
	   
   


?>
<form action="" method=""> 
	
    <table class="m-3 table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
		   
          </tr>
        </thead>
        <tbody>
		
		<?php
		

    $record="";
	$Total = 0;
	$itemCount = 0;
	
foreach($_SESSION as $key => $value){
	if(substr($key,0,5)=="util_"){
		$utilId=substr($key,5);
		$res = query("select * from utilities where util_id = $utilId");
		$utilities = mysqli_fetch_array($res);
		$subTotal= $utilities["util_pri"] * $value;
		$qty = $value;
		$itemCount += $qty;
		$name =$utilities["util_name"] ;
		$price =$utilities["util_pri"] ;
		$Total += $subTotal;
$row = <<<DELIMETER
<tr>
	<td>$name</td>
	<td>&#36;$price</td>
	<td>$qty</td>
	<td>&#36;$subTotal</td>
	
	
</tr>
DELIMETER;
			
			}
			echo $row;
			
}		?>
        </tbody>
    </table>
	
</form>





 </div><!--Main Content-->


           <hr>

        <?php include("footer.php"); ?>



    </div>
    <!-- /.container -->

 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
