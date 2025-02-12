<?php 
session_start();
//session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<?php 
include('config.php');
include('header.php');
?>

<body>
<script>
function printOut(divId) {
  var printOutContent = document.getElementById(divId).innerHTML;
  var originalContent = document.body.innerHTML;
  document.body.innerHTML = printOutContent;
  window.print();
  document.body.innerHTML = originalContent;
}
</script>
    
    <?php 
	include('navbar.php'); 
	?>


    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row" id="printIt">

      <h1>Checkout</h1>

<form action="" method="post"> 
	
    <table class="table table-striped">
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
    $row="";
	$Total = 0;
	$itemCount = 0;
	$itemCounter = 1;
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
	<td>
	
</tr>
DELIMETER;
			$itemCounter++;
			}
			echo $row;
}	?>
        </tbody>
    </table>
	
	<a href="index.php?deleteSession=1"><img src="House.svg" width="50" height="50" /></a>
	<input type="image" name="submit" src="printer.svg" width="50" height="50" onClick="printOut('printIt')" />

</form>



<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php echo $itemCount; ?></span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">$<?php echo $Total; ?></span></strong> </td>
</tr>


</tbody>

</table>



</div><!-- CART TOTALS-->


 </div><!--Main Content-->


           <hr>

        <?php include('footer.php'); ?>



    </div>
    <!-- /.container -->

 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
