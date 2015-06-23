
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
				  <li class='active'>History</li>
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
                            <td class='total'>Day</td>
							<td class='total'>Delete</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
                                
                                if ((isset($_SESSION['id_name'])) && (!empty($_SESSION['id_name'])))
                                {   
                                    $ID_name = $_SESSION['id_name'];
                                    $sel=mysql_query("select * from oder_list_item, item, oder where oder_list_item.ID_oder = oder.ID and oder_list_item.ID_item = item.ID and oder.user = '$ID_name'");
                                    if(mysql_num_rows($sel)!=0)
                                    {
                                        while($arr=mysql_fetch_array($sel))
                                        {
                                            echo "<tr id = 'row_".$arr['ID_item']."_".$arr['ID_oder']."'>
                        							<td class='cart_product'>
                        								<a href=''><img style='width: 50px; height: 50px;' src='".$arr['image']."' alt=''></a>
                        							</td>
                        							<td class='cart_description'>
                        								<h4><a href=''>".$arr['Name']."</a></h4>
                        								<p>Web ID oder: ".$arr['ID']."</p>
                        							</td>
                        							<td class='cart_price'>
                        								<p>".$arr['price']."VND</p>
                        							</td>
                                                    
                        							<td class='cart_quantity'>
                        								<div class='cart_quantity_button'>
                        									<input class='cart_quantity_input' id ='q_i_".$arr['ID']."' type='text' name='quantity' value='".$arr['number']."' autocomplete='off' size='2' disabled>
                        								</div>
                        							</td>
                                                    <td class='cart_description' style='font-size: 12; width: 100px;'>
                        								<p>".$arr['time']."</p>
                        							</td>
                        							<td class='cart_delete'>
                        								<a class='cart_quantity_delete' id ='bt_delete_".$arr['ID_item']."' onclick ='delete_click(".$arr['ID_item'].", ".$arr['ID_oder'].");'><i class='fa fa-times'></i></a>
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
        function delete_click(id, id_oder)
        {
            var  formData = "type="+"delete_oder"+"&id="+id+"&id_oder="+id_oder;
            $.ajax({
                    url : "func.php",
                    type: 'POST',
                    data : formData,
                    success: function(response)
                    { 
                        var row = document.getElementById("row_"+id+"_"+id_oder);
                        row.parentNode.removeChild(row);
                    }
                });
            
            
            return false;
        }
    </script>


    
</body>
</html>