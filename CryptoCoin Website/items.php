<?php
include("header.php");
include_once("config.php");

?>

<div class="row g-4">
<?php
$res;

if(isset($_GET['ID_ser']))
	$res=getItemsBySerID($_GET['ID_ser']);
else
	$res = getItems();
while($row=mysqli_fetch_array($res))
{
	
	$iteam= "<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item bg-light p-5\">
                        <img class=\"img-fluid mb-4\" src=\"$row[util_img]\" alt=\"\">
                        <h5 class=\"mb-3\"><a href=item.php?itemid=$row[util_id]>$row[util_name]<a></h5>
                        <p>$row[util_s_desc]</p>
						<a class=\"btn btn-primary\" href=\"cart.php?item_id=$row[util_id]\" >ADD TO CART</a>  
                    </div>
                </div>";
				echo $iteam;
	
}
		?>		
  </div>
       