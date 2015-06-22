<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <title>Shop | E-Shopper</title>
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/font-awesome.min.css' rel='stylesheet'>
    <link href='css/prettyPhoto.css' rel='stylesheet'>
    <link href='css/price-range.css' rel='stylesheet'>
    <link href='css/animate.css' rel='stylesheet'>
	<link href='css/main.css' rel='stylesheet'>
	<link href='css/responsive.css' rel='stylesheet'>
    <!--[if lt IE 9]>
    <script src='js/html5shiv.js'></script>
    <script src='js/respond.min.js'></script>
    <![endif]-->       
    <link rel='shortcut icon' href='images/ico/favicon.ico'>
    <link rel='apple-touch-icon-precomposed' sizes='144x144' href='images/ico/apple-touch-icon-144-precomposed.png'>
    <link rel='apple-touch-icon-precomposed' sizes='114x114' href='images/ico/apple-touch-icon-114-precomposed.png'>
    <link rel='apple-touch-icon-precomposed' sizes='72x72' href='images/ico/apple-touch-icon-72-precomposed.png'>
    <link rel='apple-touch-icon-precomposed' href='images/ico/apple-touch-icon-57-precomposed.png'>
</head><!--/head-->

<body>
	<?php
        include("header.php");
    ?>
	
	<section id='advertisement'>
		<div class='container'>
			<img src='images/shop/advertisement.jpg' alt='' />
		</div>
	</section>
	
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

							include("config.php");

                                $sel=mysql_query("select * from item");
                                $n=1;
                                
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
                                for($x = ($ci-1)*9 ; $x < $arrlength and $x < $ci*9; $x++) {
                                    echo "
    							   <div class='col-sm-4'>
    									<div class='product-image-wrapper'>
    										<div class='single-products'>
    												<div class='productinfo text-center'>
    													<img src=".mysql_result($sel,$x,"image")." alt='' />
    													<h2>".mysql_result($sel,$x,"price")."$</h2>
    													<p>".mysql_result($sel,$x,"Name")."</p>
    													<a href='#' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
    												</div>
    										</div>
    										<div class='choose'>
    											<ul class='nav nav-pills nav-justified'>
    												<li><a href='#'><i class='fa fa-plus-square'></i>Add to wishlist</a></li>
    												<li><a href='#'><i class='fa fa-plus-square'></i>Add to compare</a></li>
    											</ul>
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
                                echo "<li class='active'><a href='?i=".$i."'>".$i."</a></li>";
                            } 
                            else
                            {
                                echo "<li><a href='?i=".$i."''>".$i."</a></li>";
                            }
                        }
                        if($ci >= $imax)
                        {
                            echo "<li><a href='?i=".$imax."''>&raquo;</a></li>";
                        }
                        else 
                        {
                            echo "<li><a href='?i=".($ci+1)."''>&raquo;</a></li>";
                        }
                            
						echo "</ul></div>";
                        ?>
					
				</div>
			</div>
		</div>
	</section>
	
	<?php
        include("footer.php");
    ?>
	

  
    <script src='js/jquery.js'></script>
	<script src='js/price-range.js'></script>
    <script src='js/jquery.scrollUp.min.js'></script>
	<script src='js/bootstrap.min.js'></script>
    <script src='js/jquery.prettyPhoto.js'></script>
    <script src='js/main.js'></script>
</body>
</html>