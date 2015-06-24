<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Purple_loginform Website Template | Home :: w3layouts</title>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!-- -->
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
</head>
<body>
<?php
if(isset($_POST['name']))
{
	include("../config.php");
	$name=$_REQUEST['name'];
	$password=$_REQUEST['password'];
	$sel=mysql_query("select * from admin where name = N'$name' and password = '$password' ");
	$arr=mysql_fetch_array($sel);
	if($arr!=NULL)
	  {
		session_start();
		$_SESSION['id_name'] = $arr['name'];
		echo "<script>alert('Users login successfully')</script>";
		header( "Location: pages/index.php" );
		exit;
	 }
	else 
	{
		echo "<script>alert('Login failed')</script>";
	}
}
?>
<script>
function vali()
{
	var nam=/^[a-zA-Z]{3,15}$/;
	
	var pass=/^[a-zA-Z0-9-_]{3,16}$/;
	

	if(document.formadmin.name.value.search(nam)==-1)
	{
		alert("Name has no special character, 3-15 character");
		document.formadmin.name.focus();
		return false;
	}

	else if(document.formadmin.password.value.search(pass)==-1)
	{
		alert("enter correct password");
		document.formadmin.password.focus();
		return false;
	}
	
	else 
	{
		return true;
	}
}
</script>
<!-- contact-form -->	
<div class="message warning">
<div class="inset">
	<div class="login-head">
		<h1>Login Form</h1>
		 <div class="alert-close"> </div> 			
	</div>
		<form name='formadmin' action='#' method="post" onSubmit='return vali()' >
			<li>
				<input name= "name" type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"><a href="#" class=" icon user"></a>
			</li>
				<div class="clear"> </div>
			<li>
				<input name = "password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"> <a href="#" class="icon lock"></a>
			</li>
			<div class="clear"> </div>
			<div class="submit">
				<input name ="submit" type="submit" onclick="myFunction()" value="Sign in" >
				<h4><a href="#">Lost your Password ?</a></h4>
						  <div class="clear">  </div>	
			</div>
				
		</form>
		</div>					
	</div>
	</div>
	<div class="clear"> </div>
<!--- footer --->
<div class="footer">
	
</div>
</body>
</html>