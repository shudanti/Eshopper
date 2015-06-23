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
					<div class='features_items'><!--features_items-->
						<h2 class='title text-center'>Features Items</h2>
						<?php

							$cat = $_REQUEST["cat"];
							if ($cat == NULL)
								$cat = "ALL";
							if ($cat == "All")
								$sel=mysql_query("select * from item");
							else
								$sel=mysql_query("select * from item where category = '$cat'");
							
							$arrlength = mysql_numrows($sel);
							$imax = 1;
							if($arrlength% 9==0)
							{
								$imax = $arrlength/12;
							}
							else 
							{
								$imax = ($arrlength - $arrlength%12)/12 + 1;
							}
							$ci = $_REQUEST["i"];
							if ($ci == NULL)
								$ci = 1;
							for($x = ($ci-1)*9 ; $x < $arrlength and $x < $ci*9; $x++) {
								echo "
							   <div class='col-sm-4'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
												<div class='productinfo text-center'>
                                                    <a href='product-details.php?index=".mysql_result($sel,$x,"ID")."' >
													   <img src=".mysql_result($sel,$x,"image")." alt='' />
													</a>
                                                    <h2>".mysql_result($sel,$x,"price")." VND</h2>
													<p>".mysql_result($sel,$x,"Name")."</p>
													<a href='product-details.php?index=".mysql_result($sel,$x,"ID")."' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Detail</a>
												</div>
										</div>
										
									</div>
								</div>";
							}
							   
							   
							  //$n++;
                        ?>
						</div><!--features_items-->		  
						
						<?php
						echo "<div><ul class='pagination'>";
                        for($i = 1; $i<= $imax; $i++ )
                        {
                            if($ci==$i)
                            {
                                echo "<li class='active'><a href='?cat=".$cat."&i=".$i."'>".$i."</a></li>";
                            } 
                            else
                            {
                                echo "<li><a href='?cat=".$cat."&i=".$i."''>".$i."</a></li>";
                            }
                        }
                        if($ci >= $imax)
                        {
                            echo "<li><a href='?cat=".$cat."&i=".$imax."''>&raquo;</a></li>";
                        }
                        else 
                        {
                            echo "<li><a href='?cat=".$cat."&i=".($ci+1)."''>&raquo;</a></li>";
                        }
                            
						echo "</ul></div>";
                        ?>
					
				</div>
			</div>
		</div>
	</section>
</body>
<?php
	include("footer.php");
?>