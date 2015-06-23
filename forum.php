<?php
    session_start();
    if (!(isset($_SESSION['id_name'])) || (empty($_SESSION['id_name'])))
    {
        header( "Location: login.php" );
        exit;
    }
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
		    	<a class="forum_nav_link" href="forum_newThread.php">Start New Discussion</a>
        	</div>
	

     
	    
        <div class="clear_nav_cat_sear"></div>

    <table class="table_topics">
      <tbody><tr>
        <th class="topics_th_left"><a class="topics_th_links" >Topics</a></th>
        <th class="topics_th_2nd_col"><a class="topics_th_links" >Posted on&nbsp;↑</a></th>
        <th class="topics_th_3d_col">Replies</th>
        <th class="topics_th_right"><a class="topics_th_links" >Views</a></th>
      </tr>
    
          <tr class="topics_stycky">
      
      	        <td class="topics_td_left">
          <div class=" sticky_title">
                    
            <table class="topics_table_img_title">            
              <tbody><tr>
              	 
                <td class="topics_img_td">
                	<div class="topics_img_div">
						 
                        <img src="./Forum/37_grigor_dimitrov.jpg" class="topics_thumb" alt="shreyam">
                         
                    </div>
                </td>
                 
                <td class="topics_title_td">
                	<a class="topics_title_link" href="forum_context.php">How to increase Google Page Rank?</a>
                	<div class="topics_posted_by">by shreyam</div>
                </td>
              </tr>
            </tbody></table>
            
          </div>

        </td>     
        <td class="topics_td_2nd_col">
			Mar 14, 2010 
			4:10 pm        </td>
        
        <td class="topics_td_3d_col">7</td>
        
        <td class="topics_td_right">15607</td>
        
      </tr>
          <tr class="topics_stycky">
      
      	        <td class="topics_td_left">
          <div class=" sticky_title">
                    
            <table class="topics_table_img_title">            
              <tbody><tr>
              	 
                <td class="topics_img_td">
                	<div class="topics_img_div">
						 
                        <img src="./Forum/noicon.png" class="topics_thumb" alt="MakeItOnline">
                         
                    </div>
                </td>
                 
                <td class="topics_title_td">
                	<a class="topics_title_link" href="http://simpleforumphp.com/forum/preview.php?p=&cat_id=&tid=9#onforum">How do I add a RSS feed? </a>
                	<div class="topics_posted_by">by MakeItOnline</div>
                </td>
              </tr>
            </tbody></table>
            
          </div>

        </td>     
        <td class="topics_td_2nd_col">
			Feb 10, 2010 
			5:45 pm        </td>
        
        <td class="topics_td_3d_col">5</td>
        
        <td class="topics_td_right">2795</td>
        
      </tr>
          <tr>
      
      	        <td class="topics_td_left">
          <div class="">
                    
            <table class="topics_table_img_title">            
              <tbody><tr>
              	 
                <td class="topics_img_td">
                	<div class="topics_img_div">
						 
                        <img src="./Forum/487_grigor_dimitrov.jpg" class="topics_thumb" alt="Jeremy Thomps">
                         
                    </div>
                </td>
                 
                <td class="topics_title_td">
                	<a class="topics_title_link" href="http://simpleforumphp.com/forum/preview.php?p=&cat_id=&tid=487#onforum">What is AJAX - where and how to use it?</a>
                	<div class="topics_posted_by">by Jeremy Thomps</div>
                </td>
              </tr>
            </tbody></table>
            
          </div>

        </td>     
        <td class="topics_td_2nd_col">
			May 30, 2013 
			11:13 am        </td>
        
        <td class="topics_td_3d_col">0</td>
        
        <td class="topics_td_right">8308</td>
        
      </tr>
          <tr>
      
      	        <td class="topics_td_left">
          <div class="">
                    
            <table class="topics_table_img_title">            
              <tbody><tr>
              	 
                <td class="topics_img_td">
                	<div class="topics_img_div">
						 
                        <img src="./Forum/342_Nadal_Australian_Open.jpg" class="topics_thumb" alt="kaushal">
                         
                    </div>
                </td>
                 
                <td class="topics_title_td">
                	<a class="topics_title_link" href="http://simpleforumphp.com/forum/preview.php?p=&cat_id=&tid=342#onforum">what is web design ??</a>
                	<div class="topics_posted_by">by kaushal</div>
                </td>
              </tr>
            </tbody></table>
            
          </div>

        </td>     
        <td class="topics_td_2nd_col">
			Oct 20, 2011 
			11:21 am        </td>
        
        <td class="topics_td_3d_col">0</td>
        
        <td class="topics_td_right">4542</td>
        
      </tr>
          <tr>
      
      	        <td class="topics_td_left">
          <div class="">
                    
            <table class="topics_table_img_title">            
              <tbody><tr>
              	 
                <td class="topics_img_td">
                	<div class="topics_img_div">
						 
                        <img src="./Forum/noicon.png" class="topics_thumb" alt="abu">
                         
                    </div>
                </td>
                 
                <td class="topics_title_td">
                	<a class="topics_title_link" href="http://simpleforumphp.com/forum/preview.php?p=&cat_id=&tid=322#onforum">What are your interests?</a>
                	<div class="topics_posted_by">by abu</div>
                </td>
              </tr>
            </tbody></table>
            
          </div>

        </td>     
        <td class="topics_td_2nd_col">
			Sep 4, 2011 
			9:58 pm        </td>
        
        <td class="topics_td_3d_col">0</td>
        
        <td class="topics_td_right">4213</td>
        
      </tr>
          <tr>
      
      	        <td class="topics_td_left">
          <div class="">
                    
            <table class="topics_table_img_title">            
              <tbody><tr>
              	 
                <td class="topics_img_td">
                	<div class="topics_img_div">
						 
                        <img src="./Forum/191_sean_paul.jpg" class="topics_thumb" alt="12letters">
                         
                    </div>
                </td>
                 
                <td class="topics_title_td">
                	<a class="topics_title_link" href="http://simpleforumphp.com/forum/preview.php?p=&cat_id=&tid=191#onforum">What's your favorite song ever?</a>
                	<div class="topics_posted_by">by 12letters</div>
                </td>
              </tr>
            </tbody></table>
            
          </div>

        </td>     
        <td class="topics_td_2nd_col">
			Jan 22, 2011 
			4:30 pm        </td>
        
        <td class="topics_td_3d_col">0</td>
        
        <td class="topics_td_right">7356</td>
        
      </tr>
          <tr>
      
      	        <td class="topics_td_left">
          <div class="closed_title">
                    
            <table class="topics_table_img_title">            
              <tbody><tr>
              	 
                <td class="topics_img_td">
                	<div class="topics_img_div">
						 
                        <img src="./Forum/noicon.png" class="topics_thumb" alt="blankeyecue">
                         
                    </div>
                </td>
                 
                <td class="topics_title_td">
                	<a class="topics_title_link" href="http://simpleforumphp.com/forum/preview.php?p=&cat_id=&tid=36#onforum">SEO for Flash sites</a>
                	<div class="topics_posted_by">by blankeyecue</div>
                </td>
              </tr>
            </tbody></table>
            
          </div>

        </td>     
        <td class="topics_td_2nd_col">
			Mar 12, 2010 
			3:56 pm        </td>
        
        <td class="topics_td_3d_col">4</td>
        
        <td class="topics_td_right">12798</td>
        
      </tr>
          <tr>
      
      	        <td class="topics_td_left">
          <div class="">
                    
            <table class="topics_table_img_title">            
              <tbody><tr>
              	 
                <td class="topics_img_td">
                	<div class="topics_img_div">
						 
                        <img src="./Forum/noicon.png" class="topics_thumb" alt="Kannaram">
                         
                    </div>
                </td>
                 
                <td class="topics_title_td">
                	<a class="topics_title_link" href="http://simpleforumphp.com/forum/preview.php?p=&cat_id=&tid=29#onforum">Difference b/w Forum and Blog</a>
                	<div class="topics_posted_by">by Kannaram</div>
                </td>
              </tr>
            </tbody></table>
            
          </div>

        </td>     
        <td class="topics_td_2nd_col">
			Mar 10, 2010 
			7:39 am        </td>
        
        <td class="topics_td_3d_col">5</td>
        
        <td class="topics_td_right">14065</td>
        
      </tr>
          <tr>
      
      	        <td class="topics_td_left">
          <div class="">
                    
            <table class="topics_table_img_title">            
              <tbody><tr>
              	 
                <td class="topics_img_td">
                	<div class="topics_img_div">
						 
                        <img src="./Forum/noicon.png" class="topics_thumb" alt="Jim Barghes">
                         
                    </div>
                </td>
                 
                <td class="topics_title_td">
                	<a class="topics_title_link" href="http://simpleforumphp.com/forum/preview.php?p=&cat_id=&tid=15#onforum">Spend for immortality?</a>
                	<div class="topics_posted_by">by Jim Barghes</div>
                </td>
              </tr>
            </tbody></table>
            
          </div>

        </td>     
        <td class="topics_td_2nd_col">
			Mar 1, 2010 
			6:10 am        </td>
        
        <td class="topics_td_3d_col">0</td>
        
        <td class="topics_td_right">6076</td>
        
      </tr>
          <tr> 
        <td class="showing_threads" colspan="4">Showing threads 1 to 9 of 21</td>
      </tr>
    
        </tbody></table>

	<!-- Pagination start here --> 
        <div class="pagination"> Page 1 of 3 
                        <span class="current">1</span>
                                <a href="http://simpleforumphp.com/forum/preview.php?p=2&search=&cat_id=&ordType=&ordBy=">2</a>
                                <a href="http://simpleforumphp.com/forum/preview.php?p=3&search=&cat_id=&ordType=&ordBy=">3</a>
                            <a href="http://simpleforumphp.com/forum/preview.php?p=2&search=&cat_id=&ordType=&ordBy=">Next &gt;</a>
                </div>
     
    <!-- Pagination end here --> 

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