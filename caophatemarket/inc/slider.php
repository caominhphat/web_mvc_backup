	<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php
				$getLastestDell = $product->getLastestDell();
				if($getLastestDell){
					while($resultdell = $getLastestDell->fetch_assoc()){
				 ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php"> <img src="admin/uploads/<?php echo $resultdell['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>DELL</h2>
						 <p><?php echo $resultdell['productName'] ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $resultdell['productId'] ?>">Chi tiết</a></span></div>
				   </div>
			   </div>		
			    <?php
						}
					}
			    ?>	

			    <?php
				$getLastestSS = $product->getLastestSamsung();
				if($getLastestSS){
					while($resultss = $getLastestSS->fetch_assoc()){
				 ?>	

				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php"><img src="admin/uploads/<?php echo $resultss['image'] ?>" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Samsung</h2>
						   <p><?php echo $resultss['productName'] ?></p>
						 <div class="button"><span><a href="details.php?proid=<?php echo $resultss['productId'] ?>">Chi tiết</a></span></div>
					</div>
				</div>
				 <?php
						}
					}
			    ?>
			</div>

			<div class="section group">

				 <?php
				$getLastestOp = $product->getLastestOppo();
				if($getLastestOp){
					while($resultap = $getLastestOp->fetch_assoc()){
				 ?>	
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php"> <img src="admin/uploads/<?php echo $resultap['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Oppo</h2>
						 <p><?php echo $resultap['productName'] ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $resultap['productId'] ?>">Chi tiết</a></span></div>
				   </div>
			   </div>	
			    <?php
						}
					}
			    ?>			

			     <?php
				$getLastestHw = $product->getLastestHuawei();
				if($getLastestHw){
					while($resulthw = $getLastestHw->fetch_assoc()){
				 ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php"><img src="admin/uploads/<?php echo $resulthw['image'] ?>" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Huawei</h2>
						   <p><?php echo $resulthw['productName'] ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $resulthw['productId'] ?>">Chi tiết</a></span></div>
					</div>
				</div>
				   <?php
						}
					}
			    ?>	
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/1.jpg" alt=""/></li>
						<li><img src="images/2.jpg" alt=""/></li>
						<li><img src="images/3.jpg" alt=""/></li>
						<li><img src="images/4.jpg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>