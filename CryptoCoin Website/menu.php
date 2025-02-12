<?php include_once("config.php");
?>

<!-- Service Start -->

    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
			<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Services</h1>
				
                <p class="text-primary fs-5 mb-5">Buy, Sell And Exchange Cryptocurrency</p>
            </div>
			
			
			<div class="tab-class text-center">
			<form method = "post" action="">
                <ul class="nav nav-pills d-inline-flex justify-content-center bg-white text-uppercase border-inner p-4 mb-5" name="Tabs">
			<?php

			//$res =query("select * from service");	
			$res = getServices();
			while($row = mysqli_fetch_array($res)){
				
				
				$string= " <li class=\"nav-item\"><a class=\"nav-link text-white active\" href=\"service.php?ID_ser=$row[ser_id]\">$row[ser_name] </a></li>";
				
			echo $string;
		
			}
			?>
                    <?php //echo getCategories(); ?>
                </ul>
				</form>
				
                <div class="tab-content">
				<?php include("items.php");?>
                    <div id="tab-0" class="tab-pane fade show p-0 active">
                        <div class="row g-3">
                            
                                <?php 
									//echo getItems(0);
								?>
                            
						</div>
                    </div>
					
					<?php 
						//getTabItems();
					?>

				</div>
            </div>
			</div>
    </div>
    <!-- Service End -->