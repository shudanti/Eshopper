<?php
    include("header.php");
?>
<?php
    include("config.php");
    $email = $_REQUEST['email'];
    
    if(isset($_POST['btsubmit']))
    {
        $send_result_message = "";
        if($email == null || $email == "")
        {
            $send_result_message = "Email is empty"; 
        }
        else
        {
            $sel=mysql_query("select * from users where email = N'$email' ");
            $arr=mysql_fetch_array($sel);
            if($arr['email']==$email)
            {
                require_once 'swiftmailer-5.x/lib/swift_required.php';
        
                $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
                  ->setUsername('shudantini@gmail.com')
                  ->setPassword('testemail');
                
                $mailer = Swift_Mailer::newInstance($transport);
                
                $message = Swift_Message::newInstance('Test Subject')
                  ->setFrom(array('shudantini@gmail.com' => 'E shopper'))
                  ->setTo(array($email))
                  ->setBody("This is your 
username: ".$arr['name']."
password: ".$arr['password']."");
                
                $result = $mailer->send($message);
                $send_result_message = "Send mail!";
            }
            else{
                $send_result_message = "Email not true";
            }
        }
    }
	
 ?>

<body>
    <section id='form'><!--form-->
		<div class='container'>
			<div class='row'>
				<div class='col-sm-4 col-sm-offset-1'>
					<div class='login-form'><!--login form-->
						<h2>Login to your account</h2>
						<form action='#' method="post">
							<input name="email" type='email' placeholder='Email' />
                            <?php
                            echo "<p>".$send_result_message."</p>";
                            ?>
							<button name="btsubmit" type='submit' class='btn btn-default'>Send</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
</body> 
<?php
   include("footer.php");
?>