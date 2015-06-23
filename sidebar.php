<div class='col-sm-3'>
	<div class='left-sidebar'>
		<h2>Category</h2>
		<div class='panel-group category-products' id='accordian'><!--category-product-->							
			
			<?php
				$sel = mysql_query("select * from category");
				$name = $arr["Name"];
				while($arr=mysql_fetch_array($sel))
				{
					$index = $arr["ID"];
                    $name = $arr["Name"];
					echo "
						<div class='panel panel-default'>
							<div class='panel-heading'>
								<h4 class='panel-title'><a href='shop.php?cat=$index&i=1'>$name</a></h4>
							</div>
						</div>
					";	
				}
			?>
		</div>	
	</div>
</div>