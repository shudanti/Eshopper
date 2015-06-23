<?php
   include("header.php");
?>
<body>
	<section>
		<div class='container'>
			<div class='row'>
				<?php
                    include("sidebar.php");
                ?>
				
				<div class='col-sm-9 padding-right'>
					<div class='product-details'><!--product-details-->
						<?php
							$i = $_REQUEST["index"];
							$sel=mysql_query("select * from item where ID = '$i'");
							$image = mysql_result($sel,0,"image");
							$name = mysql_result($sel,0,"Name");
							$price = mysql_result($sel,0,"price");
							$detail = mysql_result($sel,0,"Detail");
							echo("
							<div class='col-sm-5'>
								<div class='view-product'>
									<img src='$image' alt='' />
								</div>
							</div>
							<div class='col-sm-7'>
								<div class='product-information'><!--/product-information-->
									<h2>$name</h2>
									<span>
										<span>$$price</span>
										<button type='button' class='btn btn-fefault cart'>
											<i class='fa fa-shopping-cart'></i>
											Add to cart
										</button><br>
										<a target=\"_blank\" href=\"https://www.nganluong.vn/button_payment.php?receiver=(Email chính tài khoản nhận tiền)&product_name=(Mã đơn đặt hàng)&price=(Tổng giá trị)&return_url=(URL thanh toán thành công)&comments=(Ghi chú về đơn hàng)\" ><img src=\"https://www.nganluong.vn/data/images/buttons/11.gif\"  border=\"0\" /></a> 
									</span>
								</div><!--/product-information-->
							</div>
						</div><!--/product-details-->
							
					
					<div class='category-tab shop-details-tab'><!--category-tab-->
						<div class='col-sm-12'>
							<ul class='nav nav-tabs'>
								<li><a href='#details' data-toggle='tab'>Details</a></li>
								<li class='active'><a href='#reviews' data-toggle='tab'>Reviews (5)</a></li>
							</ul>
						</div>
						
						<div class='tab-content'>
						
							<div class='tab-pane fade' id='details' >
								$detail
							</div>
						");
						?>							
							<?php 
								include("comment.php");
							?>
							
						</div>
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>
</body>
<?php
   include("footer.php");
?>