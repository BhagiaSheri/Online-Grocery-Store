<?php

session_start();
if (!isset($_SESSION["name"])) {
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Victual Boutique</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Place your fontawesome kit's code here -->
	<script src="https://kit.fontawesome.com/9e2173a16a.js" crossorigin="anonymous"></script>

	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
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
	</style>
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Victual Boutique</a>
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<li><a href="profile.php"><span class="fa fa-home"></span> Home</a></li>
					<li><a href="profile.php"><span class="fa fa-product-hunt"></span> Product</a></li>
					<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
					<li style="top:10px;left:20px;"><button class="btn btn-success" id="search_btn">Search</button></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-shopping-cart"></span> Cart <span class="badge">0</span></a>
						<div class="dropdown-menu" style="width:400px;">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-3 col-xs-3">Sl.No</div>
										<div class="col-md-3 col-xs-3">Product Image</div>
										<div class="col-md-3 col-xs-3">Product Name</div>
										<div class="col-md-3 col-xs-3">Price in $.</div>
									</div>
								</div>
								<div class="panel-body">
									<div id="cart_product">
										<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
									</div>
								</div>
								<div class="panel-footer"></div>
							</div>
						</div>
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span> <?php echo "Hi," . $_SESSION['name']; ?></a>
						<ul class="dropdown-menu">
							<li><a href="cart.php" style="text-decoration:none; color:balck;"><span class="fa fa-shopping-cart"> Cart</a></li>
							<li><?php echo '<a href="orderhistory.php?name=' . $_SESSION['name'] . '" style="text-decoration:none; color:black;"><span class="fa fa-history"></span> Order History</a>'; ?></li>
							<li class="divider"></li>
					</li>
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
			<div class="col-md-2">
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
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-success" id="scroll">
					<div class="panel-heading">Products</div>
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
					<div class="panel-footer">&copy; 2016</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>
</body>

</html>