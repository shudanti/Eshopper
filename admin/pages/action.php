<?php
	include ("../../config.php");
	$table = $_REQUEST["t"];
	$id = $_REQUEST["id"];
	$a = $_REQUEST["a"];
	$p = $_REQUEST["p"];
	$name = $_REQUEST["n"];
	$prc = $_REQUEST["prc"];
	$img = $_REQUEST["img"];
	$cat = $_REQUEST["cat"];
	$det = $_REQUEST["det"];
	if (strcmp($a, "remove") == 0)
	{
		mysql_query("delete from $table where ID like '$id'");
	}
	else if(strcmp($a, "add") == 0)
	{
		if (strcmp($table, "category") == 0)
		{	
			$sel=mysql_query("select max(ID) as 'maxid' from $table");
			$id = mysql_result($sel,0,"maxid") + 1;
			mysql_query("insert into $table (ID, Name) values ('$id', '$name')");
		}
		else if (strcmp($table, "item") == 0)
		{	
			$sel=mysql_query("select max(ID) as 'maxid' from $table");
			$id = mysql_result($sel,0,"maxid") + 1;
			mysql_query("insert into $table values ('$id', '$name','$prc','$img', '$cat', '$det')");
			echo "insert into $table values ('$id', '$name','$prc','$img', '$cat', '$det')";
		}
	}
	else if(strcmp($a, "edit") == 0)
	{
		if (strcmp($table, "category") == 0)
		{
			mysql_query("update $table set Name = '$name' where ID like '$id'");
		}
		else if (strcmp($table, "item") == 0)
		{	
			
		}
	}
	echo "<script>alert('Done');</script>";
	echo "<script>window.close();</script>";
	header( "Location: $p");
?>
