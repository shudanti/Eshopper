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
        if($password != $repassword)
        {
            echo "<script>alert('Confirm password not true')</script>";
        }
        else if($password == $repassword)
        {
            if((isset($_REQUEST['pass'])) && (!empty($_REQUEST['pass'])))
            {
                $sel=mysql_query("update users set password = N'$password' where name = '$id_name' ");
                echo "<script>alert('Change password complete')</script>";
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
<script>

function vali()
{
	var nam=/^[a-zA-Z]{4,15}$/;
	var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
	var pass=/^[a-zA-Z0-9-_]{6,16}$/;
	var phn=/^[0-9]{9,14}$/;
	var add=/^[a-zA-Z0-9 ]{5,150}$/;
	var rel=/^[a-zA-Z ]{2,45}$/;
	var city=/^[a-zA-Z]{2,30}$/;

	if(document.fuser.name.value.search(nam)==-1 && document.fuser.name.value != "")
	{
		alert("enter correct name");
		document.fuser.name.focus();
		return false;
	}
	else if(document.fuser.email.value.search(email)==-1 && document.fuser.email.value != "")
	{
		alert("enter correct email");
		document.fuser.email.focus();
		return false;
	}



	else if(document.fuser.pass.value.search(pass)==-1 && document.fuser.pass.value != "")
	{
		alert("enter correct pass");
		document.fuser.pass.focus();
		return false;
	}
	else if(document.fuser.repass.value.search(pass)==-1 && document.fuser.repass.value != "")
	{
		alert("enter correct re pass");
		document.fuser.repass.focus();
		return false;
	}
	
	else if(document.fuser.realname.value.search(rel)==-1 && document.fuser.realname.value != "")
	{
		alert("enter correct real name");
		document.fuser.realname.focus();
		return false;
	}
	
	else if(document.fuser.phone.value.search(phn)==-1 && document.fuser.phone.value != "")
	{
		alert("enter correct phone");
		document.fuser.phone.focus();
		return false;
	}
	else if(document.fuser.address.value.search(add)==-1 && document.fuser.address.value != "")
	{
		alert("enter correct address");
		document.fuser.address.focus();
		return false;
	}
	else if(document.fuser.city.value.search(city)==-1 && document.fuser.city.value != "")
	{
		alert("enter correct city");
		document.fuser.city.focus();
		return false;
	}
	else 
	{
		return true;
	}
}
</script>
	 
<body>
    <div class='container'>
        <div class='shopper-informations'>
        	<div class='row'>
            <form method="post" name = 'fuser' onSubmit='return vali()' >
        		<div class='col-sm-3'>
        			<div class='shopper-info'>
        				<p>Shopper Information</p>
        				
                        <?php
        					echo "<input name='name' type='text' placeholder='User Name' value='".$id_name."' disabled>
        					<input name='email' type='email' placeholder='Email' value='".$id_email."'>
        					<input name='pass' type='password' placeholder='Password (6-16 character)'>
        					<input name='repass' type='password' placeholder='Confirm password'>";
                        ?>
        				
        				
        			</div>
        		</div>
        		<div class='col-sm-5 clearfix'>
        			<div class='bill-to'>
        				<p>Bill To</p>
        				<div class='form-one'>
        					
                            <?php
								echo "<input name='realname' type='text' placeholder='Real Name (No special character)' value='".$id_realname."'>
								<input name='phone' type='text' placeholder='Phone (9-14 number)' value='".$id_phone."'>
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