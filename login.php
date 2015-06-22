<?php
include("config.php");
$r_name=$_REQUEST['r_name'];
$r_email=$_REQUEST['r_email'];
$r_password=$_REQUEST['r_password'];
$r_repassword=$_REQUEST['r_repassword'];
$r_btsubmit=$_REQUEST['r_btsubmit'];
if(isset($_POST['r_btsubmit']))
{

$sel=mysql_query("select name from users where name = N'$r_name' ");
$arr=mysql_fetch_array($sel);

if($arr['name']!=$r_name)
  {
   if(mysql_query("insert into users values(N'$r_name',N'$r_password',N'$r_email')"))
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

$sel=mysql_query("select * from users where name = N'$name' and password = '$password' ");
$arr=mysql_fetch_array($sel);

if($arr['name']==$name)
  {
        session_start();
        $_SESSION['id_name'] = $arr['name'];
        $_SESSION['id_email'] = $arr['email'];
        $_SESSION['id_phone'] = $arr['phone'];
        $_SESSION['id_realname'] = $arr['realname'];
        $_SESSION['id_address'] = $arr['address'];
        $_SESSION['id_city'] = $arr['city'];
        echo "<script>alert('Users login successfully')</script>";
        
        header( "Location: index.php" );
        exit;
	 }
else 
{
	echo "Login false";
}

}
?>

	
<?php
    include("header.php");
?>
<body>
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
                            <a href="sendemail.php" style="float: right">Forgot</a>
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
