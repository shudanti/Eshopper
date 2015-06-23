<?php
    session_start();
    if (!(isset($_SESSION['id_name'])) || (empty($_SESSION['id_name'])))
    {
        header( "Location: login.php" );
        exit;
    }
    include("header.php");
    
    
    $id_c_oder = $_SESSION['id_current_oder'];
?>
<body>
	<section id='cart_items'>
		<div class='container'>
			<div class='breadcrumbs'>
				<ol class='breadcrumb'>
				  <li><a href='#'>Home</a></li>
				  <li class='active'>Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class='register-req'>
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->

			<div class='shopper-informations'>
				<div class='row'>
                <?php
                    echo "<form id='payform' method='post' action='payment.php?pay=false&id_oder=$id_c_oder'>";
                ?>
					<div class='col-sm-3'>
						<div class='shopper-info'>
							<p>Shopper Information</p>
                            <?php
                                
                                $name = $_SESSION['id_name'];
                                $email = $_SESSION['id_email'];
                                $phone = $_SESSION['id_phone'];
                                $realname = $_SESSION['id_realname'];
                                $address = $_SESSION['id_address'];
                                $city = $_SESSION['id_city'];
    							
                                
                                $sel_oder=mysql_query("select * from oder where ID = '$id_c_oder'");
                                if(mysql_num_rows($sel_oder)!=0)
                                {
                                    $arr_oder=mysql_fetch_array($sel_oder);
                                }
                                $sum = $arr_oder['Total'];
                                echo "
        								<input type='text' placeholder='User Name' value='$name' disabled>
                    					<input type='email' placeholder='Email' value='$email' disabled>
                    					<input type='text' placeholder='Phone' value='$phone' disabled>
                                        <input type='text' placeholder='Address' value='$address' disabled>
        							";
							
							echo "<button type='submit' target='_blank'  class='btn btn-primary'  > Pay </a>"; 
						      ?>
                        </div>
					</div>
					<div class='col-sm-5 clearfix'>
						<div class='bill-to'>
							<p>Bill To</p>
							<div class='form-one'>
								
                                <?php
									echo "<input name='oder_realname' type='text' placeholder='Real Name' value='$realname'>
									<input name='oder_email' type='text' placeholder='Email*' value='$email'>
									<input name='oder_phone' type='text' placeholder='Phone' value='$phone'>";
								?>	
								
							</div>
							<div class='form-two'>
								
									<?php
                                        echo"<input name='oder_address' type='text' placeholder='Address*' value='$address'>
    									       <input name='oder_city' type='text' placeholder='City' value='$city'>";
									?>
								
							</div>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class='order-message'>
							<p>Shipping Order</p>
							<textarea name='oder_comment' id='comment_box'  placeholder='Notes about your order, Special Notes for Delivery' rows='16'></textarea>
						</div>	
					</div>					
				</form>
                </div>
			</div>
			<div class='review-payment'>
				<h2>Review & Payment</h2>
			</div>

			<div class='table-responsive cart_info'>
				<table class='table table-condensed'>
					<thead>
						<tr class='cart_menu'>
							<td class='image'>Item</td>
							<td class='description'></td>
							<td class='price'>Price</td>
							<td class='quantity'>Quantity</td>
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
                        									
                        									<input class='cart_quantity_input' id ='q_i_".$arr['ID']."' type='text' name='quantity' value='".$arr['number']."' autocomplete='off' size='2' disabled>
                        									
                        								</div>
                        							</td>
                        							
                        						</tr>";
                                        }
                                    }
                                }
                                
						echo "<tr>
							<td colspan='4'>&nbsp;</td>
							<td colspan='2'>
								<table class='table table-condensed total-result'>
									<tr>
										<td>Cart Sub Total</td>
										<td>$sum VND</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>0VND</td>
									</tr>
									<tr class='shipping-cost'>
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$sum VND</span></td>
									</tr>
								</table>
							</td>
						</tr>";
                        ?>
					</tbody>
				</table>
			</div>
			
		</div>
	</section> <!--/#cart_items-->
    <script type='text/javascript'>
        function onpay_click(){
            alert("dfa");
            document.payform.submit();
            //<?php
//            echo "top.window.location = 'https://www.nganluong.vn/button_payment.php?receiver=shudanti@gmail.com&product_name=$id_c_oder&price=$sum&return_url=index.php&comments=(Ghi chú v? don hàng)';";
//            ?>
        }
    </script>
	

	<?php
        include("footer.php");
    ?>
	


    <script src='js/jquery.js'></script>
	<script src='js/bootstrap.min.js'></script>
    <script src='js/jquery.scrollUp.min.js'></script>
    <script src='js/jquery.prettyPhoto.js'></script>
    <script src='js/main.js'></script>
</body>
</html>