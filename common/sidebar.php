<html>
<head></head>
<body>
<div class="about">
			<div class="product">
				<div class="product-listy">
					<h3>Our Category</h3>
					<ul class="product-list">
					<?php 
				$sql = "select * from category ";
				$pq = mysqli_query($con, $sql);
				while($pr = mysqli_fetch_array($pq))
				{
				
				?>
						<li><a href="category.php?cat=<?php echo $pr['id'] ;?>"><i class="fa fa-arrow-right" aria-hidden="true"></i> 
						<?php echo $pr['categoryname']; ?>
						</a></li>
				<?php
				}
				?>	
						
					</ul>
				</div>
				<div class="latest-bis">
				
					<a href="alto.php"><img src="images/alto.jpg" class="img-responsive"></a>
					<div class="offer"> 
						<p>20%</p>
						<small>Top Offer</small>
					</div>
				</div>
				
				<div>
					<img src="images/virat.jpg" class="img-responsive ">
				</div>
				
</body>
</html>