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
								<div id ='d1' class='product-information'><!--/product-information-->
									<h2>$name</h2>
									<span>
										<span>$price VND</span>
										<button id='btaddtocart'  type='button' onclick='addtocart();' class='btn btn-fefault cart'>
											<i class='fa fa-shopping-cart'></i>
											Add to cart
										</button><br>
                                        
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
<script type='text/javascript'>
    function addtocart() {
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState===4 && xmlhttp.status===200)
            {
                alert(xmlhttp.responseText);
    
            }
        }
        <?php
            //echo "xmlhttp.open('GET','addtocart.php?i=".$i."',true);";
            //echo "top.location='addtocart.php?i=".$i."';";
            echo "var  formData = 'i='+".$i.";";
            
        ?>
            $.ajax({
                    url : "addtocart.php",
                    type: 'POST',
                    data : formData,
                    success: function(response)
                    {
                        
                            if(response.status == "success")
                            {
                                document.getElementById("btaddtocart").innerHTML  = "In your cart";
                                document.getElementById("btaddtocart").style.background='#c7eaf0';
                                document.getElementById("btaddtocart").disabled = true;
                            }
                            else
                            {
                                top.window.location = "login.php";
                            }
                       
                    }
                });
        
        
        return false;
    }
</script>


<?php
    if ((isset($_SESSION['id_current_oder'])) && (!empty($_SESSION['id_current_oder'])))
    {
        $id_c_oder = $_SESSION['id_current_oder'];
        $sel_check_item=mysql_query("select ID_item from oder_list_item where ID_oder = '$id_c_oder' and ID_item = '$i'");
        
        if(mysql_num_rows($sel_check_item)!=0)
        {
            echo "dsf";
            echo "<script type='text/javascript'>
                document.getElementById('btaddtocart').innerHTML  = 'In your cart';
                document.getElementById('btaddtocart').style.background='#c7eaf0';
                document.getElementById('btaddtocart').disabled = true;
            </script>";
        }
        
        
    }
   include("footer.php");
?>