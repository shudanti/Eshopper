<?php
include("config.php");
$r_name=$_REQUEST['r_name'];
$r_email=$_REQUEST['r_email'];
$r_password=$_REQUEST['r_password'];
$r_repassword=$_REQUEST['r_repassword'];
$r_btsubmit=$_REQUEST['r_btsubmit'];
if(isset($_POST['r_btsubmit']))
{

$sel=mysql_query("select name from users where name = '$r_name' ");
$arr=mysql_fetch_array($sel);

if($arr['name']!=$r_name)
  {
   if(mysql_query("insert into users values('$r_name','$r_password','$r_email')"))
	   {  
	       
	       echo "<script>alert('New users created successfully')</script>";
	   }
	 }
else 
{
	echo "user already exists";
}

}
$name=$_REQUEST['name'];
$password=$_REQUEST['password'];
$btsubmit=$_REQUEST['btsubmit'];
if(isset($_POST['btsubmit']))
{

$sel=mysql_query("select * from users where name = '$name' and password = '$password' ");
$arr=mysql_fetch_array($sel);

if($arr['name']==$name)
  {
        session_start();
        $_REQUEST['id_name'] = $name;
        echo "<script>alert('Users login successfully')</script>";
	 }
else 
{
	echo "Login false";
}

}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <title>Login | E-Shopper</title>
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
	<section id='form'><!--form-->
		<div class='container'>
			<div class='row'>
				<div class='col-sm-4 col-sm-offset-1'>
					<div class='login-form'><!--login form-->
						<h2>Login to your account</h2>
						<form action='#' method="post">
							<input name="name" type='text' placeholder='ID' />
							<input name="password" type='password' placeholder='Password' />
							<span>
								<input name="keep_sign_in" type='checkbox' class='checkbox'> 
								Keep me signed in
							</span>
							<button name="btsubmit" type='submit' class='btn btn-default'>Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class='col-sm-1'>
					<h2 class='or'>OR</h2>
				</div>
				<div class='col-sm-4'>
					<div class='signup-form'><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action='#' method="post">
							<input id='r_name' name='r_name' type='text' placeholder='ID'/>
							<input id='r_email' name='r_email' type='email' placeholder='Email Address'/>
							<input name='r_password' type='password' placeholder='Password'/>
							<input name='r_repassword' type='password' placeholder='Confirm Password'/>
							<button id='r_btsubmit' name='r_btsubmit' type='submit' class='btn btn-default'>Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
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