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

      <h1 class="m-2 text-primary">Checkout</h1>
<?php 
	  
  if(isset($_GET['st']) && $_GET['st'] == "Completed"){

	$pid = $_GET['PayerID'];
	$st = $_GET['st'];
	$tx = $_GET['tx'];
	$cc = $_GET['cc'];
	$amt = $_GET['amt'];
	$dt = time();
	$allItems="";
	foreach($_SESSION as $key => $value){
		if(substr($key,0,5) == "util_"){
			$allItems .= "$key:$value<br/>";
	}}
	$user = $_SESSION['user'];
	
	
	$query = "insert into transaction(ID,Status,trans,Currency,amount,TransDateTime,items,username) values ('$pid', '$st', '$tx', '$cc', $amt, '$dt','$allItems','$user')";
	
	$result = mysqli_query($conn, $query);
	if(mysqli_affected_rows($conn) > 0){
		echo "Transaction has been saved successfully";
		foreach($_SESSION as $key => $value){
			//Update quantities in DB before empty the session
			
			if(substr($key,0,5) == "util_"){
				updateUtil(substr($key,5),$value);
				//unset($_SESSION[$key]);
				header("Location:bill.php");
			}
		}
	}
	
}
?>
<?php 

	if(isset($_GET['function'])){
		$item = $_GET['itemid'];
		
		if($_GET['function'] == "ADD"){
		$row = getItem($item);
		$res=mysqli_fetch_array($row);
		if($_SESSION["util_$item"] < $res["uti_qty"])
			$_SESSION["util_$item"] += 1;
		//header("location:checkout.php");
		}
		elseif($_GET['function'] == "SUBTRACT"){
			$_SESSION["util_$item"] -= 1;
			if($_SESSION["util_$item"] <1)
				unset($_SESSION["util_$item"]);
			//header("location:checkout.php");
		}
		elseif($_GET['function'] == "DELETE")
			unset($_SESSION["util_$item"]);
			//header("location:checkout.php");
		
	}

   if(isset($_GET['Sub'])){
	   $x = $_GET['itemIDHidden'];
	   if(isset($_SESSION["util_" . $x]))
			$_SESSION["util_" . $x] += 1;
	   else
			$_SESSION["util_" . $x] = 1;
		
	   //print_r($_SESSION);
	   
   }


?>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> 
	<input type="hidden" name="cmd" value="_cart"> 
	<input type="hidden" name="business" value="sb-hkh24727267314@business.example.com"> 
	<input type="hidden" name="currency_code" value="USD">
	<input type="hidden" name="upload" value="1">

    <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
		   <th> Functions </th>
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
	<a href="checkout.php?itemid=$utilId&function=ADD"><i class="bi bi-plus-circle-fill"></i></a>
	<a href="checkout.php?itemid=$utilId&function=SUBTRACT"><i class="bi bi-dash-circle-fill"></i></a>
	<a href="checkout.php?itemid=$utilId&function=DELETE"><i class="bi bi-trash-fill"></i></a></td>
	
	
<input type="hidden" name="item_name_{$itemCounter}" value="{$name}"> 
<input type="hidden" name="item_number_{$itemCounter}" value="{$utilId}"> 
<input type="hidden" name="amount_{$itemCounter}" value="{$price}"> 
<input type="hidden" name="quantity_{$itemCounter}" value="{$qty}"> 

</tr>
DELIMETER;
			$itemCounter++;
			}
			echo $row;
			
}		?>
        </tbody>
    </table>
	<input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online"> 

</form>



<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2 class="m-2 text-primary">Cart Totals</h2>

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

        <?php include("footer.php"); ?>



    </div>
    <!-- /.container -->

 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
