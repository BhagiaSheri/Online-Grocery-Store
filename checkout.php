<?php
session_start();
include 'db.php';
if(!isset($_SESSION["name"])){
	header("location:index.php");
}

// current date & time
date_default_timezone_set('Asia/Karachi');
$identificationCode = date('mdYHisu', time());
echo $identificationCode;

$username = $_GET['name'];
$sql = "SELECT * FROM cart WHERE username='$username'";
$run_query = mysqli_query($con, $sql);
if (mysqli_num_rows($run_query) > 0) {
	$total_amount = 0;
	while ($row = mysqli_fetch_array($run_query)) {
		$total = $row["total_amount"];
		$total_amount = $total_amount + $total;
	}
}
$date1 = date("Y/m/d");
$sql1 = "INSERT INTO orders(username,total_amount,order_date, identification_code) VALUES('$username','$total_amount','$date1', $identificationCode)";
$run_query1 = mysqli_query($con, $sql1);
$max = "SELECT max(order_id), max(identification_code) from orders where username='$username'";
$result = mysqli_query($con, $max);
$row = mysqli_fetch_row($result);
$order_id = $row[0];
$unique_code = $row[1];
$sql2 = "SELECT * from cart where username='$username'";
$run_query2 = mysqli_query($con, $sql2);
if (mysqli_num_rows($run_query2) > 0) {
	while ($row2 = mysqli_fetch_array($run_query2)) {
		$product_id = $row2["product_id"];
		$product_title = $row2["product_title"];
		$product_price = $row2["price"];
		$prod_quantity = $row2["quantity"];
		$sql6 = "UPDATE products SET product_quantity=product_quantity-$prod_quantity where product_id='$product_id'";
		$run_query3 = mysqli_query($con, $sql6);
		$sql4 = "INSERT INTO order_items(order_id,product_id,product_price,product_quantity) VALUES($order_id,'$product_id','$product_price','$prod_quantity')";
		mysqli_multi_query($con, $sql4);
	}
}

$sql5 = "DELETE FROM cart WHERE username = '$username'";
$run_query5 = mysqli_query($con, $sql5);
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
							<li><a href="cart.php" style="text-decoration:none; color:black;"><span class="fa fa-shopping-cart">Cart</a></li>
							<li><?php echo '<a href="orderhistory.php?name=' . $_SESSION['name'] . '" style="text-decoration:none; color:black;"><span class="fa fa-history"> Order History</a>'; ?></li>
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
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-success">
					<div class="panel-heading">Your order no. <?php echo $order_id ?> is placed and identification code is: <?php echo $unique_code ?></div>
					<div class="panel-body">
						<div class="row">
							<a class="text-success" href="profile.php">Continue Shopping
							</a>
						</div>
</body>

</html>