<?php include("header.php") ?>
<body>
    <div id="wrapper">
        <?php include("navigation.php") ?>
        <div id="page-wrapper">
            <div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Add new Item</h1>
				</div>
			</div>
		<form method="get" action="action.php">
			<div class="form-group">
				<label>Name</label>
				<input name="n" class="form-control"> <br>
				<label>Price</label>
				<input name="prc" class="form-control"> <br>
				<label>Image</label>
				<input name="img" class="form-control"> <br>
				<label>Category</label>
				<input name="cat" class="form-control"> <br>
				<label>Detail</label>
				<input name="det" class="form-control"> <br>
				<input type="hidden" name="t" value = "item">
				<input type="hidden" name="a" value = "add">
				<input type="hidden" name="p" value = "products-edit.php">
				<input type="submit" class="btn btn-primary">
				
			</div>
		</form>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>