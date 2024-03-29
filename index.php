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
	<script src="loginvalidate.js"></script>
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

		input.login {
			width: 250px;
			color: black;
		}

		.fp {
			color: white;
			list-style: none;
		}

		.submit {
			color: blue;
		}

		.error {
			color: red;
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
					<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
					<li><a href="index.php"><i class="fa fa-product-hunt" aria-hidden="true"></i> Product</a></li>
					<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
					<li style="top:10px;left:20px;"><button class="btn btn-success" id="search_btn">Search</button></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li style="margin: 6px;"><a href="#" style="color: white;" class="dropdown-toggle btn btn-success" data-toggle="dropdown"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart</a>
						<div class="dropdown-menu" style="width:400px;">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-3">Sl.No</div>
										<div class="col-md-3">Product Image</div>
										<div class="col-md-3">Product Name</div>
										<div class="col-md-3">Price in $.</div>
									</div>
								</div>
								<div class="panel-body"></div>
								<div class="panel-footer"></div>
							</div>
						</div>
					</li>
					<li style="margin: 6px;"><a href="#" style="color: white;" class="dropdown-toggle btn btn-success" data-toggle="dropdown"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
						<ul class="dropdown-menu">
							<div style="width:400px;">
								<div class="panel panel-success">
									<div class="panel-heading">
										<h3>
											<center>Login</center>
										</h3>
									</div>
									<div class="panel-heading">

										<p><label class="login">Username:</label></p>
										<p><input class="login" type="text" name="username" id="username" /></p>
										<p><label class="login">Password:</label></p>
										<p><input class="login" type="password" name="password" id="pwd" /></p>
										<p><input style="color: white;" type="submit" value="Submit" class="submit btn btn-success" id="s1" />



									</div>
									<div class="panel-footer" id="e_msg"></div>
								</div>
							</div>
						</ul>
					</li>
					<li style="margin: 6px;"><a href="reg.html" style="color: white;" class="mr-2 btn btn-success"><i class="fa fa-user-plus" aria-hidden="true"></i> SignUp</a></li>
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
					<div class="panel-footer">&copy; Final Year Semester For Learning Purpose 2020</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>

</html>