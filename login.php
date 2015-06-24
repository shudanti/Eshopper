<header>
	<?php
		session_start();
		if ((isset($_SESSION['id_name'])) && (!empty($_SESSION['id_name'])))
		{
			header( "Location: pages/index.php" );
		}
	?>
</header>
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
   if(mysql_query("insert into users(name, password, email) values(N'$r_name',N'$r_password',N'$r_email')"))
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

if($arr != NULL)
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
    echo "<script>alert('Login false')</script>";
}

}
?>
<script>
function cname(id)
{
	var nam=/^[a-zA-Z]{4,15}$/;
	if(document.getElementById(id).value.search(nam)==-1)
	{
		alert("enter correct name ");
		document.getElementById(id).focus();
		return false;
	}
}

function cemail(id)
{
	var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
	if(document.getElementById(id).value.search(email)==-1)
	{
		alert("enter correct email");
		document.getElementById(id).focus();
		return false;
	}
}

function cpass(id)
{
	var pass=/^[a-zA-Z0-9-_]{6,16}$/;
	if(document.getElementById(id).value.search(pass)==-1)
	{
		alert("enter correct pass");
		document.getElementById(id).focus();
		return false;
	}
}

function cphone(id)
{
	var phn=/^[0-9]{9,14}$/;
	if(document.getElementById(id).value.search(phn)==-1)
	{
		alert("enter correct phone no");
		document.getElementById(id).focus();
		return false;
	}
}
function vali()
{
	var nam=/^[a-zA-Z]{4,15}$/;
	var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
	var pass=/^[a-zA-Z0-9-_]{6,16}$/;
	var phn=/^[0-9]{9,14}$/;
	var add=/^[a-zA-Z0-9 ]{10,150}$/;
	var city=/^[a-zA-Z]{5,30}$/;

	if(document.f2.r_name.value.search(nam)==-1)
	{
		alert("enter correct name");
		document.f2.r_name.focus();
		return false;
	}
	else if(document.f2.r_email.value.search(email)==-1)
	{
		alert("enter correct email");
		document.f2.r_email.focus();
		return false;
	}



	else if(document.f2.r_password.value.search(pass)==-1)
	{
		alert("enter correct pass");
		document.f2.r_password.focus();
		return false;
	}
	else if(document.f2.r_repassword.value.search(pass)==-1)
	{
		alert("enter correct re pass");
		document.f2.r_repassword.focus();
		return false;
	}
	
	else 
	{
		return true;
	}
}

function valilogin()
{
	var nam=/^[a-zA-Z]{4,15}$/;
	var pass=/^[a-zA-Z0-9-_]{6,16}$/;
	
	if(document.f1.name.value.search(nam)==-1)
	{
		alert("enter correct name");
		document.f1.name.focus();
		return false;
	}
	else if(document.f1.password.value.search(pass)==-1)
	{
		alert("enter correct pass");
		document.f1.password.focus();
		return false;
	}
} 
</script>
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
						<form action='#' method="post" name='f1' onSubmit='return valilogin()'>
							<input name="name" type='text' placeholder='ID (No special character, 4-15 character)' onChange='return cname("name")'/>
							<input name="password" type='password' placeholder='Password (6-16 character)' onChange='return cpass("password")'/>
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
						<form action='#' method="post" name='f2' onSubmit='return vali()'>
							<input id='r_name' name='r_name' type='text' placeholder="ID (No special character, 4-15 character)" onChange='return cname("r_name")'/>
							<input id='r_email' name='r_email' type='email' placeholder='Email Address' onChange='return cemail("r_email")'/>
							<input id='r_password' name='r_password' type='password' placeholder='Password (6-16 character)' onChange='return cpass("r_password")'/>
							<input id='r_repassword'  name='r_repassword' type='password' placeholder='Confirm Password' onChange='return cpass("r_repassword")'/>
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




</body>
