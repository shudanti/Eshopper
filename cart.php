
<?php
    session_start();
    if (!(isset($_SESSION['id_name'])) || (empty($_SESSION['id_name'])))
    {
        header( "Location: login.php" );
        exit;
    }
    include("header.php");
?>
<body>
	<section id='cart_items'>
		<div class='container'>
			<div class='breadcrumbs'>
				<ol class='breadcrumb'>
				  <li><a href='#'>Home</a></li>
				  <li class='active'>Shopping Cart</li>
				</ol>
			</div>
			<div class='table-responsive cart_info'>
				<table class='table table-condensed'>
					<thead>
						<tr class='cart_menu'>
							<td class='image'>Item</td>
							<td class='description'></td>
							<td class='price'>Price</td>
							<td class='quantity'>Quantity</td>
							<td class='total'>Delete</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
                                if ((isset($_SESSION['id_current_oder'])) && (!empty($_SESSION['id_current_oder'])))
                                {   
                                    $id_c_oder = $_SESSION['id_current_oder'];
                                    $sel=mysql_query("select * from oder_list_item, item where ID_oder = '$id_c_oder' and ID_item = ID");
                                    if(mysql_num_rows($sel)!=0)
                                    {
                                        while($arr=mysql_fetch_array($sel))
                                        {
                                            echo "<tr id = 'row_".$arr['ID']."'>
                        							<td class='cart_product'>
                        								<a href=''><img style='width: 50px; height: 50px;' src='".$arr['image']."' alt=''></a>
                        							</td>
                        							<td class='cart_description'>
                        								<h4><a href=''>".$arr['Name']."</a></h4>
                        								<p>Web ID: ".$arr['ID']."</p>
                        							</td>
                        							<td class='cart_price'>
                        								<p>".$arr['price']."VND</p>
                        							</td>
                                                    
                        							<td class='cart_quantity'>
                        								<div class='cart_quantity_button'>
                        									<a style='cursor: hand;' class='cart_quantity_up' id ='bt_i_".$arr['ID']."' onclick ='increase_click(".$arr['ID'].");' > + </a>
                        									<input class='cart_quantity_input' id ='q_i_".$arr['ID']."' type='text' name='quantity' value='".$arr['number']."' autocomplete='off' size='2' disabled>
                        									<a style='cursor: hand;' class='cart_quantity_down' id ='bt_d_".$arr['ID']."' onclick ='down_click(".$arr['ID'].");'> - </a>
                        								</div>
                        							</td>
                        							<td class='cart_delete'>
                        								<a class='cart_quantity_delete' id ='bt_delete_".$arr['ID']."' onclick ='delete_click(".$arr['ID'].");'><i class='fa fa-times'></i></a>
                        							</td>
                        						</tr>";
                                        }
                                    }
                                }
                        ?>
                        

						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id='do_action'>
		<div class='container'>
			<div class='heading'>
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class='row'>
				
				<div class='col-sm-6'>
					<div class='total_area'>
						<ul>
                        <?php
                            $sel_oder=mysql_query("select * from oder where ID = '$id_c_oder'");
                            if(mysql_num_rows($sel_oder)!=0)
                            {
                                $arr_oder=mysql_fetch_array($sel_oder);
    							echo "<li>Cart Sub Total <span>".$arr_oder['Total']."VND</span></li>
    							<li>Eco Tax <span>0VND</span></li>
    							<li>Shipping Cost <span>Free</span></li>
    							<li>Total <span>".$arr_oder['Total']."VND</span></li>";
                            }
                            else
                            {
                                echo "<li>Cart Sub Total <span>0VND</span></li>
    							<li>Eco Tax <span>0VND</span></li>
    							<li>Shipping Cost <span>Free</span></li>
    							<li>Total <span>0VND</span></li>";
                            }
                        ?>
						</ul>
							<a class='btn btn-default update' href=''>Update</a>
							<a class='btn btn-default check_out' href='checkout.php'>Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	<?php
        include("footer.php");
    ?>
	<script type='text/javascript'>
        function increase_click(id)
        {
            var quantity = document.getElementById("q_i_"+id).value;
            
            var newquantity = parseInt(quantity) + 1;
            
            var  formData = "type="+"increase"+"&id="+id;
            
            //top.window.location = "func.php?type=increase&id="+id;
            
            $.ajax({
                    url : "func.php",
                    type: 'POST',
                    data : formData,
                    success: function(response)
                    { 
                        document.getElementById("q_i_"+id).value = newquantity.toString();
                        
                    }
                });
            
            
            return false;
        };
        
        function down_click(id)
        {
            var quantity = document.getElementById("q_i_"+id).value;
            if(quantity <= 1)
            {
                return false;
            }
            var newquantity = parseInt(quantity) - 1;
            
            var  formData = "type="+"down"+"&id="+id;
            $.ajax({
                    url : "func.php",
                    type: 'POST',
                    data : formData,
                    success: function(response)
                    { 
                        document.getElementById("q_i_"+id).value = newquantity.toString();
                    }
                });
            
            
            return false;
        };
        function delete_click(id)
        {
            var  formData = "type="+"delete"+"&id="+id;
            $.ajax({
                    url : "func.php",
                    type: 'POST',
                    data : formData,
                    success: function(response)
                    { 
                        var row = document.getElementById("row_"+id);
                        row.parentNode.removeChild(row);
                    }
                });
            
            
            return false;
        }
    </script>


    
</body>
</html>