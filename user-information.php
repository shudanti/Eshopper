<?php
    include("header.php");
    include("config.php");
    $id_name = $_SESSION['id_name'];
    $id_email = $_SESSION['id_email'];
    $id_phone = $_SESSION['id_phone'];
    $id_realname = $_SESSION['id_realname'];
    $id_address = $_SESSION['id_address'];
    $id_city = $_SESSION['id_city'];
    
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['pass'];
    $repassword=$_REQUEST['repass'];
    $realname=$_REQUEST['realname'];
    $phone=$_REQUEST['phone'];
    $address=$_REQUEST['address'];
    $city=$_REQUEST['city'];
    
    $btsubmit=$_REQUEST['btsubmit'];
    if(isset($_POST['btsubmit']))
    {
        echo $password;
        
        if($password != $repassword)
        {
            echo "<script>alert('Confirm password not true')</script>";
        }
        else if($password == $repassword)
        {
            if((isset($_REQUEST['pass'])) && (!empty($_REQUEST['pass'])))
            {
                $sel=mysql_query("update users set password = N'$password' where name = '$id_name' ");
            }
        }
        if($email != $id_email)
        {

            $sel=mysql_query("update users set email = N'$email' where name = '$id_name' ");
            $_SESSION['id_email'] = $email;
            $id_email = $email;
        }
        if($realname != $id_realname)
        {
            
            $sel=mysql_query("update users set realname = N'$realname' where name = '$id_name' ");
            $_SESSION['id_realname'] = $realname;
            $id_realname = $realname;

        }
        if($phone != $id_phone)
        {
            
            $sel=mysql_query("update users set phone = N'$phone' where name = '$id_name' ");
            $_SESSION['id_phone'] = $phone;
            $id_phone = $phone;

        }
        
        if($address != $id_address)
        {

            $sel=mysql_query("update users set address = N'$address' where name = '$id_name' ");
            $_SESSION['id_address'] = $address;
            $id_address = $address;
        }
        if($city != $id_city)
        {

            $sel=mysql_query("update users set city = N'$city' where name = '$id_name' ");
            $_SESSION['id_city'] = $city;
            $id_city = $city;
        }
        
    }
?>
<body>
    <div class='container'>
        <div class='shopper-informations'>
        	<div class='row'>
            <form method="post">
        		<div class='col-sm-3'>
        			<div class='shopper-info'>
        				<p>Shopper Information</p>
        				
                        <?php
        					echo "<input name='name' type='text' placeholder='User Name' value='".$id_name."' disabled>
        					<input name='email' type='email' placeholder='Email' value='".$id_email."'>
        					<input name='pass' type='password' placeholder='Password'>
        					<input name='repass' type='password' placeholder='Confirm password'>";
                        ?>
        				
        				
        			</div>
        		</div>
        		<div class='col-sm-5 clearfix'>
        			<div class='bill-to'>
        				<p>Bill To</p>
        				<div class='form-one'>
        					
                            <?php
								echo "<input name='realname' type='text' placeholder='Real Name' value='".$id_realname."'>
								<input name='phone' type='text' placeholder='Phone' value='".$id_phone."'>
								<input name='address' type='text' placeholder='Address*' value='".$id_address."'>";
                            ?>
							
        				</div>
        				<div class='form-two'>
        					
                            <?php
        						   echo "<input name='city' type='text' placeholder='City*' value='".$id_city."'>"; 
                            ?>
        					
                            
        				</div>
                        
        			</div>
        		</div>		
                <div class='col-sm-4'>
                    
                    
                        <br/>
                        <br/>
                        <button name="btsubmit" type='submit' class='button btn-default'>Change</button>
                    
                </div>
                </form>		
        	</div>
        </div>
    </div>
</body>
<?php
    include("footer.php");
?>