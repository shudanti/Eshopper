<?php
mysql_connect("localhost","root","");
mysql_select_db("eshopper");
mysql_query ("set character_set_results='utf8'");
error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);

?>