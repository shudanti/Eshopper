<!DOCTYPE html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <title>E-Shopper</title>
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
	<script src='js/jquery.js'></script>
	<script src='js/bootstrap.min.js'></script>
	<script src='js/jquery.scrollUp.min.js'></script>
	<script src='js/price-range.js'></script>
    <script src='js/jquery.prettyPhoto.js'></script>
    <script src='js/main.js'></script>
</head><!--/head-->

<header id='header'><!--header-->
	<div class='header_top'><!--header_top-->
		<div class='container'>
			<div class='row'>
				<div class='col-sm-6'>
					<div class='contactinfo'>
						<ul class='nav nav-pills'>
							<li><a href=''><i class='fa fa-phone'></i> +2 95 01 88 821</a></li>
							<li><a href=''><i class='fa fa-envelope'></i> info@domain.com</a></li>
						</ul>
					</div>
				</div>
				<div class='col-sm-6'>
					<div class='social-icons pull-right'>
						<ul class='nav navbar-nav'>
							<li><a href=''><i class='fa fa-facebook'></i></a></li>
							<li><a href=''><i class='fa fa-twitter'></i></a></li>
							<li><a href=''><i class='fa fa-linkedin'></i></a></li>
							<li><a href=''><i class='fa fa-dribbble'></i></a></li>
							<li><a href=''><i class='fa fa-google-plus'></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header_top-->
	
	<div class='header-middle'><!--header-middle-->
		<div class='container'>
			<div class='row'>
				<div class='col-sm-4'>
					<div class='logo pull-left'>
						<a href='index.php'><img src='images/home/logo.png' alt='' /></a>
					</div>
					<div class='btn-group pull-right'>
						<div class='btn-group'>
							<button type='button' class='btn btn-default dropdown-toggle usa' data-toggle='dropdown'>
								USA
								<span class='caret'></span>
							</button>
							<ul class='dropdown-menu'>
								<li><a href=''>Canada</a></li>
								<li><a href=''>UK</a></li>
							</ul>
						</div>
						
						<div class='btn-group'>
							<button type='button' class='btn btn-default dropdown-toggle usa' data-toggle='dropdown'>
								DOLLAR
								<span class='caret'></span>
							</button>
							<ul class='dropdown-menu'>
								<li><a href=''>Canadian Dollar</a></li>
								<li><a href=''>Pound</a></li>
							</ul>
						</div>
					</div>
				</div>
                <?php
                    
                    
                ?>
				<div class='col-sm-8'>
					<div class='shop-menu pull-right'>
						<ul class='nav navbar-nav'>
                            <?php
                                session_start();
                                if ((isset($_SESSION['id_name'])) && (!empty($_SESSION['id_name'])))
                                {
                                       
                                       $ID_name = $_SESSION['id_name'];
	                                   echo "<li><a href='user-information.php'><i class='fa fa-user'></i> Account: ".$ID_name." </a></li>";
                                }
                                else
                                {
                                    echo "<li><a href='login.php'><i class='fa fa-user'></i> Login </a></li>";
                                }
                            ?>
							<li><a href=''><i class='fa fa-star'></i> Wishlist</a></li>
							<li><a href='checkout.php'><i class='fa fa-crosshairs'></i> Checkout</a></li>
							<li><a href='cart.php'><i class='fa fa-shopping-cart'></i> Cart</a></li>
							<li><a href='forum.php'><i class='fa fa-folder-o'></i> Forum</a></li>
                            <?php
                            if ((isset($_SESSION['id_name'])) && (!empty($_SESSION['id_name'])))
                                {
                                    echo "<li><a href='index.php' onclick='logout();'><i class='fa fa-lock'></i> Logout</a></li>";
                                }
                            ?>
                            <script type="text/javascript">
                            function logout() {
                                $.get("logout.php");
                                return false;
                            }
                            </script>
                            
                            
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-middle-->

	<div class='header-bottom'><!--header-bottom-->
		<div class='container'>
			<div class='row'>
				<div class='col-sm-9'>
					<div class='navbar-header'>
						<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
							<span class='sr-only'>Toggle navigation</span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
						</button>
					</div>
					<div class='mainmenu pull-left'>
						<ul class='nav navbar-nav collapse navbar-collapse'>
							<li><a href='index.php'>Home</a></li>
							<li class='dropdown'><a href='shop.php?cat=All&i=1'>Shop<i class='fa fa-angle-down'></i></a>
								<ul role='menu' class='sub-menu'>
									<li><a href='shop.php?cat=All&i=1'>Products</a></li>
									<li><a href='product-details.php'>Product Details</a></li> 
									<li><a href='checkout.php'>Checkout</a></li> 
									<li><a href='cart.php'>Cart</a></li> 
								</ul>
							</li> 
							<li><a href='contact-us.php'>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class='search_box pull-right'>
						<input type='text' placeholder='Search'/>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-bottom-->
</header><!--/header-->