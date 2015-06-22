<?php
	include("header.php");
?>
<style type="text/css">

* {
margin:0;
padding:0;
-webkit-font-smoothing: antialiased;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
body {
padding:0; margin:0;
-webkit-text-size-adjust: 100%;} 

</style>

<meta name="viewport" content="width=device-width">
</head>
<body style="margin: 0; padding: 0 0 0 0;">

<div style="margin: 0 auto; max-width: 1000px; min-width: 640px;">
<style scoped="">

/* clear float div recurring */
div.clearboth {
	clear:both;
	height:0; 
	line-height:0; 
	font-size:0; 
	padding:0; 
	margin:0;
}

/* set background color in the div */
.background_div {
	background-color:;	
}

/* div that wrap all the forum */
div.front_end_wrapper {
	font-family:Helvetica; 
	font-size:14px;
	margin:0 auto;
	padding-top: ;
	padding-bottom: ;
	color:#000000;
	word-wrap:break-word;
	}
div.front_end_wrapper a {
	border: 0;
}
div.front_end_wrapper a:hover {
	border: 0;
}

/* comment message style */
div.system_message {
	color: #FF0000;
	font-family: Arial;
	font-size: 14px;
	font-weight: bold;
	font-style: normal;
	text-align: center;
	padding: 0 10px 16px 10px;	
}

/* forum navigation: "Create Topic", "Home" */
.forum_navig {
	float: left;
}
a.forum_nav_link {
	display:block;
	background-color: #03a9f4;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-khtml-border-radius: 3px;
	border-radius: 3px;
	padding: 5px 8px !important;
	font-weight:bold;
	color:#FFFFFF;
	font-family:Helvetica;
	font-size:12px;
	text-decoration: none !important;
	border: 0 !important;
}
a.forum_nav_link:hover {
	background-color: #4A4E51;
	font-weight:bold;
	color:#FFFFFF;
	font-family:Helvetica;
	font-size:12px;
	text-decoration: none !important;
	border: 0 !important;
	padding: 5px 8px !important;
}

/* search form style */
div.search_form {
	float: right;
	padding: 0 8px 0 20px;
}
div.search_form form {
	margin:0; 
	padding:0;
}
.searchinput {
	color: #333;
	font-size: 12px;
	padding: 0px 8px;
	height: 24px; 
	margin:0;
	font-family: Helvetica;
	border: 1px solid #e2e2e2;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-khtml-border-radius: 3px;
	-webkit-appearance:none;
	appearance: none;
}
.searchinput:focus, .searchinput:active {
	border:1px solid #cccccc;
	box-shadow: inset 0 0 1px 1px #F0F0F0;
	-moz-box-shadow: inset 0 0 1px 1px #F0F0F0;
	-webkit-box-shadow: inset 0 0 1px 1px #F0F0F0;
	color: #333;
}
.searchbtn {
	height:26px;
	font-size: 12px;
	font-weight: bold;
	font-style: normal;
	font-family: Helvetica;
	border: 0;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-khtml-border-radius: 3px;
	background-color:#4fc3f7;
	cursor:pointer;
	color: #FFF;
	padding: 0 5px;
}
.searchbtn:hover, .searchbtn:active {
	background-color: #4A4E51;
	color: #FFF;
}

/* category drop down style */
div.category_dd {
	color: #333;
	font-family: Helvetica;
	font-size: 14px;
	float: right;
	padding:0;
}
.cat_dd_sel {
	color: #333;
	font-family: Helvetica;
	font-size: 14px;
	border: 1px solid #e2e2e2;
	height: 26px;
	padding:0;
	margin:0;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-khtml-border-radius: 3px;
	line-height:20px;
}
div.category_dd option {
	color: #333;
	font-family: Helvetica;
	font-size: 14px;
}

/* div that stay between navigation, category drop-down, search and the topics list */
.clear_nav_cat_sear {
	clear:both;
	height:26px;	
}

/* table with all the listed topics start */
.table_topics {
	width: 100%;
	border-spacing: 0; 
	border-collapse: separate;
	border: solid 9px #fafafa; 
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	background-color: #FFFFFF;
	margin-bottom:14px;
}
.table_topics td, .table_topics th  {
	padding: 1%;
}
.topics_th_left {
	width: 55%;
	text-align: left;
	background-color: #eef2f5;
}
.topics_th_2nd_col {
	width: 23%;
	text-align: center;
	background-color: #eef2f5;
}
.topics_th_3d_col {
	text-align: center;
	color:#99a9b2;
	background-color: #eef2f5;
	font-weight: normal;
	font-size: 15px;
}
.topics_th_right {
	width: 13%;
	text-align: center !important;
	background-color: #eef2f5;
}
.topics_th_links {
	color: #99a9b2 !important;
	font-family: Helvetica !important;
	font-size: 14px !important;
	text-decoration: none !important;
	font-weight: normal !important;
	font-style: normal !important; 
}
.topics_th_links:hover {
	color: #99a9b2 !important;
	font-family: Helvetica !important;
	font-size: 14px !important;
	text-decoration: underline !important;
	font-weight: normal !important;
	font-style: normal !important; 
}
.sticky_title {
	background-image:url(http://simpleforumphp.com/forum/images/sticky.png);
	background-repeat: no-repeat;
	background-position: right center;	
	background-size: 2.8% auto;
	padding-right: 2% !important;		
}
.closed_title {
	background-image:url(http://simpleforumphp.com/forum/images/padlock.png);
	background-repeat: no-repeat;
	background-position: right center;	
	background-size: 2% auto;
	padding-right: 2% !important;
}
.topics_td_left {
	text-align: left;
	border-bottom:solid 1px #eaeaea;
}
	.topics_table_img_title {
		width: 100% !important;
		border-spacing: 0 !important; 
		border: 0 !important;
	}
	.topics_table_img_title td  {
		padding: 0px;
	}
	.topics_img_td {
		width: 36px !important;
	}
		.topics_img_div {
			width:36px !important; 
			height: 36px !important; 
			overflow: hidden  !important; 
		}
			.topics_thumb {
				min-height:36px; 
				width:36px; 
				border:0;
				-webkit-border-radius: 2px !important;
				-moz-border-radius: 2px !important;
				border-radius: 2px !important;
			}
		.topics_title_td {
			padding-left: 10px !important;
		}
			a.topics_title_link {
				font-weight:normal !important;
				color:#03a9f4 !important;
				font-family:Helvetica !important;
				font-size:16px !important;
				text-decoration: none !important;
			}
			a.topics_title_link:hover {
				font-weight:normal !important;
				color: #2B2B2B !important;
				font-family:Helvetica !important;
				font-size:16px !important;
				text-decoration: underline !important;
			}
			.topics_posted_by {
				font-weight:normal;
				color:#727272;
				font-family:Helvetica;
				font-size:12px;
				padding-top: 4px;
			}
.topics_stycky {
	background-color: #e3eff7 !important; 
}
.topics_td_2nd_col {
	color:#000000;
	background-color: #f1eff5;
	font-family:Verdana;
	font-size:11px;
	font-weight:normal;
	font-style:italic;
	border-bottom:solid 1px #eaeaea; 
	text-align: left !important;	
	padding-left:10px !important;
}
.topics_td_3d_col {
	text-align: center;
	border-bottom:solid 1px #eaeaea;
}
.topics_td_right {
	text-align: center;
	border-bottom:solid 1px #eaeaea;
}

.showing_threads {
	color: #5a5454;
	background-color: #f0f0f0;
	font-family: Helvetica;
	font-size: 11px;
	font-weight: normal;
	font-style: normal;
	text-align: left;
	padding: 4px;
}
.topics_no_here {
	border-left:solid 1px #eaeaea;
	border-right:solid 1px #eaeaea;
	border-bottom:solid 1px #eaeaea;
	padding:20px !important;
}
/* table with all the listed topics end */


/* pagination style */
div.pagination {
	color: #000000;
	background-color: #ffffff;
	font-family: Helvetica;
	font-size:12px;
	font-weight:normal;
	font-style:normal;
	text-align: left; 
	padding: 30px 0 10px 0;
}
div.pagination a {
	color: #3a6581;
	padding: 4px 7px;
	margin: 1px;
	border: 1px solid #e3eff7;	
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	text-decoration: none;
}
div.pagination a:hover, div.pagination a:active {
	border: 1px solid #C2DAEA;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	color: #03A9F4;
	background-color: #F8FBFD;
}
div.pagination span.current {
	padding: 4px 7px;
	margin: 1px;
	border: 1px solid #03a9f4;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;		
	font-weight:normal;
	background-color: #03a9f4;
	color: #FFFFFF;
}

.form_fields {
	color: #000000;
	background-color: #FFFFFF;
	font-family: Helvetica;
	font-size: 16px;		
	font-weight: normal; 
	font-style: normal; 
	padding:5px;	
	border: solid 1px #dadada;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
}
.form_fields:focus, .searchinput:active {
	border: solid 1px #03A9F4;
}
.form_textarea {
	font-size: 14px;		
	font-weight: normal; 
	font-style: normal; 
	width:95%;
	display:block; 
	float:left;
}
.form_field_50 {
	width:50%;
}
.form_field_95 {
	width:95%;
}
.form_dd_field {
	line-height:20px;
	padding:4px;
	margin:0;
	font-size: 16px;
	font-family: Helvetica;
	background-color: #FFFFFF;
	border: solid 1px #dadada;
	border-radius: 2px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	-khtml-border-radius: 2px;
	color: #000000;
}
.form_dd_field:focus, .form_dd_field:active { 
	border: solid 1px #03A9F4;
}
.form_upload {
	font-size:14px;
}
.form_captcha {
	background-color: #FFFFFF;
	border: solid 1px #dadada;
	padding:5px;
	font-family: Helvetica;
	font-size: 16px;
	color: #000000;
	
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
}
.form_captcha:focus, .form_captcha:active {
	border: solid 1px #03A9F4;
}
	.form_captcha_img {
		display:block;
		float:left;
	}
	.form_captcha_eq {
		float:left;
		padding-top:9px;
		padding-left:3px;
		padding-right:3px;
		font-size:20px;
		color:#666;
		font-weight:bold;
	}
	.form_captcha_math {
		width:34px;
		display:block;
		float:left;
		margin-top:4px;
		text-align: center;
	}
	.form_captcha_calc {
		float:left;
		padding-top:12px;
		padding-left:6px;
		font-size:12px;
	}
	.form_captcha_s {
		width:66px;
		display:block;
		float:left;
		margin-left:10px;
	}
	.form_asterisk {
		float:left;
		padding-left:5px;
		padding-top:10px;
	}
.form_left {
	color:#000000;
	font-family: Helvetica;
	font-size: 14px; 
	font-weight: normal; 
	font-style: normal; 
	border-bottom:solid 1px #eaeaea;
	text-align:left;
	width: 20%;
}
.form_right {
	color:#000000;
	font-family: Helvetica;
	font-size: 14px; 
	font-weight: normal; 
	font-style: normal; 
	border-bottom:solid 1px #eaeaea; 
	text-align:left;
}
.form_header {
	color:#99a9b2;
	background-color: #eef2f5;
	font-family: Helvetica;
	font-size: 13px; 
	font-weight: bold; 
	font-style: normal;  
}

/* topic with replies page start */
.topic_header {
	padding: 0 0 10px 0;
	color:#000000;
	font-family:Helvetica;
	font-size:18px;
	font-weight:bold;
	font-style:normal;
}
.table_topic_re_th { 
	color:#99a9b2;
	background-color: #eef2f5;
	font-family: Helvetica;
	font-size: 14px !important;
	font-weight: normal;
	font-style: normal;
	text-align:left;
}
.topic_re_cat {
	color: #727272 !important;
	font-family: Helvetica !important;
	font-size:14px !important;
	text-decoration:none !important;
}
.topic_re_cat:hover {
	color: #4E4E4E !important;
	font-family: Helvetica !important;
	font-size:14px !important;
	text-decoration: underline !important;
}
.topic_re_tr_img { 
	border-bottom:solid 2px #eaeaea;
	width:60px;
	font-weight: normal;
	text-align:center;
	vertical-align: top;	
	padding-left: 0px !important;
	padding-right: 0px !important;
}
.topic_re_img_div {
	padding: 4px 10px;
	text-align: center;
}
	.topic_re_img {	
		width: 60px;
		-webkit-border-radius: 2px !important;
		-moz-border-radius: 2px !important;
		border-radius: 2px !important;
	}
	.name_under_img {
		color: #03baf8;	
		font-family: Helvetica;
		font-size:14px !important;
		font-weight: normal;
		font-style: normal;
		text-align: center;
		padding-bottom: 16px;
	}
.topic_re_text {
	color: #222;
	font-family: Helvetica;
	font-size: 14px;
	font-weight: normal;
	font-style: normal;
	line-height: 20px;	
	text-align: left;
	vertical-align: top;
	border-bottom:solid 2px #eaeaea;
	padding-bottom: 16px;
}
.replies_head_div {
	float: left;
}
.replies_num_div {
	color: #727272; 
	font-size: 14px; 
	float: right;
}

/* "Create Thread" / "Post Reply" buttons style */
.submitbtn {
	height:26px;
	font-size: 12px;
	font-weight: bold;
	font-style: normal;
	font-family: Helvetica;
	border: 0;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-khtml-border-radius: 3px;
	background-color:#4fc3f7;
	cursor:pointer;
	color: #FFF;
	padding: 0 5px;
}
.submitbtn:hover, .submitbtn:active {
	background-color: #4A4E51;
	color: #FFF;
	padding: 0 5px;
}

</style>


<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white'
 };
</script>

<div class="background_div">
<div class="front_end_wrapper">
	<a id="onforum"></a>

	
	<div class="forum_navig">
		<a class="forum_nav_link" href="http://simpleforumphp.com/forum/preview.php?p=&cat_id=#onforum">Home</a>
    </div>
    <div class="clear_nav_cat_sear"></div>

    <div class="topic_header">
        How to increase Google Page Rank?    
    </div>

	<!-- start topic and replies table -->
    <table class="table_topics">
      <!-- topic code start -->
      <tbody><tr>
        <td colspan="2" class="table_topic_re_th">        
            Discussion in '<a class="topic_re_cat" href="http://simpleforumphp.com/forum/preview.php?p=&cat_id=3">SEO optimization</a>'  started by  shreyam -  
            Mar 14th, 2010 
            4:10 pm.
        </td>
      </tr>
      <tr>
         
        <td class="topic_re_tr_img">
        	<div class="topic_re_img_div">
				 
                <img src="./Forum/37_grigor_dimitrov.jpg" alt="shreyam" class="topic_re_img">
                
                  
            </div>
            <div class="name_under_img">shreyam</div>
        </td>
                
        <td class="topic_re_text">Hi All,<br>
<br>
I wants to know about to increase the PR in my site what are the tips and tracks to increase PR?</td>

      </tr>
      <!-- topic code end -->

		
    
    <!-- reply code start -->
          <tr>
      
        <td colspan="2" class="table_topic_re_th">
        	<div class="replies_head_div">
            re: How to increase Google Page Rank? 
			by Octavian - 
            Mar 14th, 2010 
            4:14 pm 
            </div>
            <div class="replies_num_div">#1</div>
        </td>
      </tr>
      
      <tr>
      	 
        <td class="topic_re_tr_img">
        	<div class="topic_re_img_div">
				 
                <img src="./Forum/noiconbig.png" alt="Octavian" class="topic_re_img">
                 
			</div> 
            <div class="name_under_img">Octavian</div>
		</td>
		  
        
        <td class="topic_re_text">To increase page rank get backlinks as well as u can, but be conscious google will ban your website if exceed the limit .</td> 
        
      </tr>
    
	      <tr>
      
        <td colspan="2" class="table_topic_re_th">
        	<div class="replies_head_div">
            re: How to increase Google Page Rank? 
			by andy - 
            Mar 15th, 2010 
            4:15 pm 
            </div>
            <div class="replies_num_div">#2</div>
        </td>
      </tr>
      
      <tr>
      	 
        <td class="topic_re_tr_img">
        	<div class="topic_re_img_div">
				 
                <img src="./Forum/90_moon_river.jpg" alt="andy" class="topic_re_img">
                 
			</div> 
            <div class="name_under_img">andy</div>
		</td>
		  
        
        <td class="topic_re_text">Not only quantity of links that matters, but more importantly quality. Quality links are links from authority websites (high PR), relevant topic pages, and the anchor text should be your targeted keywords.<br>
<br>
Links from irrelevant pages, for example if your site is about coffee, but get links from a page about constructions, it will get much less value, and SE will think that your site cannot be trusted.<br>
<br>
Good luck. </td> 
        
      </tr>
    
	      <tr>
      
        <td colspan="2" class="table_topic_re_th">
        	<div class="replies_head_div">
            re: How to increase Google Page Rank? 
			by Michael - 
            Mar 16th, 2010 
            4:16 pm 
            </div>
            <div class="replies_num_div">#3</div>
        </td>
      </tr>
      
      <tr>
      	 
        <td class="topic_re_tr_img">
        	<div class="topic_re_img_div">
				 
                <img src="./Forum/noiconbig.png" alt="Michael" class="topic_re_img">
                 
			</div> 
            <div class="name_under_img">Michael</div>
		</td>
		  
        
        <td class="topic_re_text">To add submitting your links to SEO friendly directories like www.linkclick.org will help. You can find a the list of directories at http://www.directorycritic.com/</td> 
        
      </tr>
    
	      <tr>
      
        <td colspan="2" class="table_topic_re_th">
        	<div class="replies_head_div">
            re: How to increase Google Page Rank? 
			by bamsey - 
            Mar 17th, 2010 
            4:17 pm 
            </div>
            <div class="replies_num_div">#4</div>
        </td>
      </tr>
      
      <tr>
      	 
        <td class="topic_re_tr_img">
        	<div class="topic_re_img_div">
				 
                <img src="./Forum/noiconbig.png" alt="bamsey" class="topic_re_img">
                 
			</div> 
            <div class="name_under_img">bamsey</div>
		</td>
		  
        
        <td class="topic_re_text">Well, newbie is trying to add some tips (please don't be laugh)<br>
1. Find backlink as many as you can.<br>
You can buy backlink, blog comment (dofollow blog), article submission, link submission, google directory, yahoo and bing directory)<br>
2. visitor is also important aspect.<br>
So, try to get unique visitor as many as possible, it will increase your pr.<br>
to get visitor, you can do bookmark to social network site, article directory, offline advertising, free section, etc<br>
3. High quality of content.<br>
<br>
hope it helps you..<br>
thanks </td> 
        
      </tr>
    
	      <tr>
      
        <td colspan="2" class="table_topic_re_th">
        	<div class="replies_head_div">
            re: How to increase Google Page Rank? 
			by landlord - 
            Mar 18th, 2010 
            4:18 pm 
            </div>
            <div class="replies_num_div">#5</div>
        </td>
      </tr>
      
      <tr>
      	 
        <td class="topic_re_tr_img">
        	<div class="topic_re_img_div">
				 
                <img src="./Forum/noiconbig.png" alt="landlord" class="topic_re_img">
                 
			</div> 
            <div class="name_under_img">landlord</div>
		</td>
		  
        
        <td class="topic_re_text">Here I am sharing some basic and important steps for increasing PR..<br>
<br>
Remove the hidden comment tags<br>
Provide inside linking to your website<br>
Trade your link with other web owners<br>
Rewrite From a New Perspective<br>
Find a Way to Create Interest and Enthusiasm on the Subject </td> 
        
      </tr>
    
	      <tr>
      
        <td colspan="2" class="table_topic_re_th">
        	<div class="replies_head_div">
            re: How to increase Google Page Rank? 
			by jimmy - 
            Mar 20th, 2010 
            4:19 pm 
            </div>
            <div class="replies_num_div">#6</div>
        </td>
      </tr>
      
      <tr>
      	 
        <td class="topic_re_tr_img">
        	<div class="topic_re_img_div">
				 
                <img src="./Forum/noiconbig.png" alt="jimmy" class="topic_re_img">
                 
			</div> 
            <div class="name_under_img">jimmy</div>
		</td>
		  
        
        <td class="topic_re_text">Get back links from high page rank do follow social media website such as propeller.com, delicious.com, myspace.com etc. And also do link exchange with only relevant websites which have good page rank.<br>
<br>
This is a best practice to increase website's page rank ...u will really get result from it.. </td> 
        
      </tr>
    
	      <tr>
      
        <td colspan="2" class="table_topic_re_th">
        	<div class="replies_head_div">
            re: How to increase Google Page Rank? 
			by Maximiano Fernandes - 
            Jan 17th, 2011 
            12:33 pm 
            </div>
            <div class="replies_num_div">#7</div>
        </td>
      </tr>
      
      <tr>
      	 
        <td class="topic_re_tr_img">
        	<div class="topic_re_img_div">
				 
                <img src="./Forum/noiconbig.png" alt="Maximiano Fernandes" class="topic_re_img">
                 
			</div> 
            <div class="name_under_img">Maximiano Fernandes</div>
		</td>
		  
        
        <td class="topic_re_text">Try page title with free website.</td> 
        
      </tr>
    
	    <!-- reply code end -->
	</tbody></table>
    <!-- end tipic and replies table -->
    
    
	
	<script type="text/javascript">
    function checkReply(form){
        var chekmail = /([0-9a-zA-Z\.-_]+)@([0-9a-zA-Z\.-_]+)/;
    
        var reply_name, reply_email, reply_text, isOk = true;
                var string;
                var message = "";
        
        message = "Please, fill all required fields!";
        
        reply_name	= form.reply_name.value;	
        reply_email	= form.reply_email.value;
        reply_text	= form.reply_text.value;
                string	= form.string.value;
            
        if (reply_name.length==0){
            form.reply_name.focus();
            isOk=false;
        }
        else if (reply_email.length<5){
            form.reply_email.focus();
            isOk=false;
        }	
        else if (reply_email.length>=5 && reply_email.match(chekmail)==null){
            message ="Please, fill correct email address!";
            form.reply_email.focus();
            isOk=false;
        }
        else if (reply_text.length==0){
            form.reply_text.focus();
            isOk=false;
        }
                else if (string.length==0){
            message ="Please, enter verification code!";
            form.string.focus();
            isOk=false;
        }
        	
    
        if (!isOk){			   
            alert(message);
            return isOk;
        } else {
            return isOk;
        }
    }
    </script>

    <form action="http://simpleforumphp.com/forum/preview.php#onforum" name="formReply" method="post" enctype="multipart/form-data">
    <input type="hidden" name="tid" value="37">
    <input type="hidden" name="act" value="post_reply">
    <table class="table_topics">
      <tbody><tr>
        <td colspan="2" class="form_header">Post Reply</td>
        </tr>
      <tr>
        <td class="form_left">Name</td>
        <td class="form_right"><input type="text" name="reply_name" value="" class="form_fields form_field_50"> *</td>
      </tr>
      <tr>
        <td class="form_left">Email</td>
        <td class="form_right"><input type="text" name="reply_email" value="" class="form_fields form_field_50"> * <sub>Will be hidden from visitors</sub></td>
      </tr>
      
       
      <tr>
        <td class="form_left">Your Avatar</td>
        <td class="form_right"><input type="file" name="image" class="form_upload"> <sub> * Limit 2Mb please</sub></td>
      </tr>
            
      <tr>
        <td colspan="2" class="form_right"><textarea name="reply_text" rows="7" class="form_fields form_textarea"></textarea> &nbsp;* </td>
      </tr>
      
       
      <tr>
        <td class="form_left">Enter verification code</td>
        <td class="form_right">
                            <img src="./Forum/captcha.php" class="form_captcha_img" alt="Simple catpcha image"> <input type="text" name="string" maxlength="7" class="form_captcha form_captcha_s"> <div class="form_asterisk">*</div>
                    </td>
      </tr>
                
      <tr>
        <td colspan="2" class="form_right">* - required fields</td>
      </tr>
      
      <tr>
        <td class="form_left">&nbsp;</td>
        <td class="form_right"><input type="submit" name="button" value="Post reply" onclick="return checkReply(this.form)" class="submitbtn"></td>
      </tr>
    </tbody></table>
    </form>

	

</div>
</div></div>

<!-- NACHALO NA TYXO.BG BROYACH -->
<script type="text/javascript">
<!--
d=document;d.write('<a href="http://www.tyxo.bg/?91298" title="Tyxo.bg counter"><img style="border:0; height:1; width:0;" alt="Tyxo.bg counter" src="'+location.protocol+'//cnt.tyxo.bg/91298?rnd='+Math.round(Math.random()*2147483647));
d.write('&sp='+screen.width+'x'+screen.height+'&r='+escape(d.referrer)+'"></a>');
//-->
</script><a href="http://www.tyxo.bg/?91298" title="Tyxo.bg counter"><img style="border:0; height:1; width:0;" alt="Tyxo.bg counter" src="./Forum/91298"></a><noscript>&lt;a href="http://www.tyxo.bg/?91298" title="Tyxo.bg counter"&gt;&lt;img src="http://cnt.tyxo.bg/91298" style="border:0; height:1; width:0;" alt="Tyxo.bg counter" /&gt;&lt;/a&gt;</noscript>
<!-- KRAI NA TYXO.BG BROYACH -->

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script><script src="./Forum/ga.js" type="text/javascript"></script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2720936-3");
pageTracker._trackPageview();
} catch(err) {}</script>

<?php
	include("footer.php");
?>