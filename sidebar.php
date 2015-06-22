<div class='col-sm-3'>
	<div class='left-sidebar'>
		<h2>Category</h2>
		<div class='panel-group category-products' id='accordian'><!--category-product-->							
			
			<?php
			include("config.php");
				$sel = mysql_query("select * from category");
				while($arr=mysql_fetch_array($sel))
				{
					echo "
						<div class='panel panel-default'>
							<div class='panel-heading'>
								<h4 class='panel-title'><a href='shop.php?cat=".$arr["Name"]."&i=1'>".$arr["Name"]."</a></h4>
							</div>
						</div>
					";	
				}
			?>
		</div>	
	</div>
</div>