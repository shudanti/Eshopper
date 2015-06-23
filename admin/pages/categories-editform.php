<?php include("header.php"); 
	$id = $_REQUEST["id"];
	$sel=mysql_query("select * from category where ID like '$id'");
	$name = mysql_result($sel,0,"Name");
?>
<body>
    <div id="wrapper">
        <?php include("navigation.php") ?>
        <div id="page-wrapper">
            <div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Edit category</h1>
				</div>
			</div>
		<form method="get" action="action.php">
			<div class="form-group">
				<label>Name</label>
				<?php
					echo "<input name='n' class='form-control' value='$name' > <br>"
				?>
				<input type="submit" class="btn btn-primary">
				<?php
					echo "<input type='hidden' name='id' value = '$id'>";
				?>
				<input type="hidden" name="t" value = "category">
				<input type="hidden" name="a" value = "edit">
				<input type="hidden" name="p" value = "categories-edit.php">
				
			</div>
		</form>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>