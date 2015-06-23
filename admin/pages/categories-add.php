<?php include("header.php") ?>
<body>
    <div id="wrapper">
        <?php include("navigation.php") ?>
        <div id="page-wrapper">
            <div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Add new Category</h1>
				</div>
			</div>
		<form method="get" action="action.php">
			<div class="form-group">
				<label>Name</label>
				<input name="n" class="form-control"> <br>
				<input type="submit" class="btn btn-primary">
				<input type="hidden" name="t" value = "category">
				<input type="hidden" name="a" value = "add">
				<input type="hidden" name="p" value = "categories-add.php">
				
			</div>
		</form>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>