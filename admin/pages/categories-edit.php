<?php include("header.php") ?>
<body>
    <div id="wrapper">
        <?php include("navigation.php") ?>
        <div id="page-wrapper">
            <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Categories</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<?php
			$sel = mysql_query("select * from category");
			echo
			'<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Edit</th>
						<th>Remove</th>
					</tr>
				</thead>';
			while($arr=mysql_fetch_array($sel))
			{
				$name = $arr["Name"];
				$id = $arr["ID"];
				$p = basename($_SERVER['PHP_SELF']);
				echo "
				<thead>
					<tr>
						<td>$id</td>
						<td>$name</td>
						<td><a href='categories-editform.php?id=$id'>Edit</a></td>
						<td><a href='action.php?p=$p&a=remove&t=category&id=$id'>Remove</a></td>
					</tr>
				</thead>
				";	
			}
			echo"
				</table>
				</div>";
		?>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>