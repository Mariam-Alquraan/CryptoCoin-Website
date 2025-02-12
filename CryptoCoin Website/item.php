<!DOCTYPE html>
<html lang="en">

<?php 
include_once("config.php"); 
include_once("header.php");
include_once("navBar.php"); 
?>
<?php

if(isset($_GET['s'])){
	$name = $_GET['name'];
	$rev = $_GET['rating'];
	$util_name = $_GET['util_name'];
	$query = "insert into review(username,rev,util_name) values('$name','$rev','$util_name')";
	global $conn;
	$results = mysqli_query($conn, $query);
	header("location:index.php");

}
?>

<body>

   <!-- Page Content -->
<div class="container">


<div class="col-md-9">

<!--Row For Image and Short Description-->

<div class="row">

<?php  
$res = getItem($_GET['itemid']);
$row = mysqli_fetch_array($res);
extract($row);
?>

    <div class="col-md-7">
	<br/> 
       <img class="img-responsive" src="<?php echo $util_img; ?> " alt="">

    </div>

    <div class="col-md-5">

        <div class="thumbnail">
         
		
    <div class="caption-full">
        <h4><a href="#"><?php echo $util_name;?></a> </h4>
        <hr>
        <h4 class="">$<?php echo $util_pri ?></h4>

          
        <p><?php echo $util_s_desc; ?></p>

  
  
    <form action="">
        <div class="form-group">
           <?php // <input type="submit" class="btn btn-primary" href="checkout.php" value="ADD TO CART"> ?>
            <a class="btn btn-primary" href="cart.php?item_id=<?php echo  $util_id ; ?> " >ADD TO CART</a>  

        </div>
		<br>
    </form>

    </div>
 
</div>

</div>


</div>


        <hr>


<!--Row for Tab Panel-->

<div class="row">

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs tab-class" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description </a></li>
    <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

<p><?php echo $util_desc?></p>
           
    
    <p></p>
    </div><br>
    <div role="tabpanel" class="tab-pane active" id="profile">

  <div class="col-md-6">

       <h3> Reviews From </h3>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">10 days ago</span>
                <p>This product was great in terms of quality. I would definitely buy another!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">12 days ago</span>
                <p>I've alredy ordered another one!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">15 days ago</span>
                <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
            </div>
        </div>

    </div>


    <div class="col-md-6">
        <h3>Add A review</h3>

     <form action="item.php" action="get" class="form-inline">
	 
	 <div class="form-group">
            <label for="">utility Name</label>
                <input type="text" id = "util" name = "util_name" value = "<?php echo $util_name?>"class="form-control" >
            </div>
        <div class="form-group">
            <label for="">Name</label>
                <input type="text" id = "name" name = "name"class="form-control" >
            </div>
             
        <div>
            <h3>Your Review</h3>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
        </div>

            <br>
            
             <div class="form-group">
             <textarea name="rating" id="rating" cols="60" rows="10" class="form-control"></textarea>
            </div>

             <br>
              <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary"  value="submit" name = "s">  

            </div>
        </form>

    </div>

 </div>

 </div>

</div>


</div><!--Row for Tab Panel-->




</div>

</div>
    <!-- /.container -->

    <div class="container">

        <hr>

            <?php include('footer.php'); ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>