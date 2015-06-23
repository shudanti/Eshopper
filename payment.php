<?php
    include("header.php");
    session_start();
    $id_c_oder = $_SESSION['id_current_oder'];
    $pay = $_REQUEST['pay'];
    if($pay == "false")
    {
        $realname = $_POST['oder_realname'];
        $phone = $_POST['oder_phone'];
        $email = $_POST['oder_email'];
        $address = $_POST['oder_address'];
        $city = $_POST['oder_city'];
        date_default_timezone_set('UTC');
        $time = date(DATE_RFC2822);
        $comment = $_POST['oder_comment'];
        mysql_query("update oder set oder.realname = N'$realname', time = '$time' , oder.email = N'$email' , oder.phone = '$phone' , oder.address = N'$address' , oder.city = '$phone' , oder.comment = N'$comment' where oder.ID = '$id_c_oder'");
        $sel_oder=mysql_query("select * from oder where ID = '$id_c_oder'");
        if(mysql_num_rows($sel_oder)!=0)
        {
            $arr_oder=mysql_fetch_array($sel_oder);
        }
        $sum = $arr_oder['Total'];
    }
?>

<body>
	<section id='form' style='margin-top: 40px;'><!--form-->
		<div class='container'>
			<div class='row'>
				
                <?php
                    if($pay == "false")
                    {
                        echo "<div class='register-req'>
            				<p>Please choose the payment method: </p>
            			</div><!--/register-req-->";
                        echo "<a target='_blank' href='https://www.nganluong.vn/button_payment.php?receiver=shudanti@gmail.com&product_name=$id_c_oder&price=$sum&return_url='payment.php?pay=false&id_oder=$id_c_oder'&comments=$comment' ><img src='https://www.nganluong.vn/data/images/buttons/11.gif'  border='0' /></a>";
    				}
                    else if($pay == "true")
                    {
                        mysql_query("update oder set ispay = 1  where ID = '$id_c_oder'");
                        $_SESSION['id_current_oder'] = null;
                        echo "<div class='register-req'>
            				<p>The order was payment, we will send pack to you soon. Thanks.</p>
            			</div><!--/register-req-->";
                    }
                
                ?>
                
				
			</div>
		</div>
	</section><!--/form-->
<?php
    include("footer.php");
?>