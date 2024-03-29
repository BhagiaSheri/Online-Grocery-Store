<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Victual Boutique
	</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Place your fontawesome kit's code here -->
	<script src="https://kit.fontawesome.com/9e2173a16a.js" crossorigin="anonymous"></script>

	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="adminmain.js"></script>
	<script src="loginvalidate1.js"></script>
	<style>
		@media screen and (max-width:480px) {
			#search {
				width: 80%;
			}

			#search_btn {
				width: 30%;
				float: right;
				margin-top: -32px;
				margin-right: 10px;
			}
		}

		.addproducts {
			float: right;
			color: #A52A2A;
			font-weight: bold;
			margin-right: 10px;
		}
	</style>
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Victual Boutique</a>
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<li><a href="adminfinal.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
					<li><a href="adminfinal.php"><i class="fa fa-product-hunt" aria-hidden="true"></i> Product</a></li>
					<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
					<li style="top:10px;left:20px;"><button class="btn btn-success" id="search_btn">Search</button></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo "Hi," . $_SESSION["name"]; ?></a>
						<ul class="dropdown-menu">
							<li class="divider"></li>
							<li><a class="btn btn-success" href="logout.php" style="text-decoration:none; color:white;">Logout</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<p><br /></p>
	<p><br /></p>
	<p><br /></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-success">

					<div class="panel-heading">Products<a style="color: white; padding: 3px 6px" class="addproducts btn btn-success" href="addproducts.php">Add Products</a><a style="color: white; padding: 3px 6px" class="addproducts btn btn-success" href="addbrand.html">Add Brands</a></div>
					<div class="panel-body">

						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">&copy; Final Year Semester For Learning Purpose 2020</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>

</html>