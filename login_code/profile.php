<?php
session_start();
?>
<DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Victual Boutique</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Place your fontawesome kit's code here -->
        <script src="https://kit.fontawesome.com/9e2173a16a.js" crossorigin="anonymous"></script>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="loginvalidate1.js"></script>
        <style>
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
        </style>
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">Victual Boutique</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> HOME</a></li>
                    <li><a href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i> Product</a></li>
                    <li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
                    <li style="top:10px;left:20px;"><input type="submit" class="btn btn-primary" id="search_btn"></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></span>Cart</a></li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['name']; ?></a>
                        <ul class="dropdown-menu">
                            <li><a class="btn btn-success" href=""></a>Logout</li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <p><br /></p>
        <p><br /></p>
        <p><br /></p>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">
                                <h4>Categories</h4>
                            </a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Categories</a></li>
                    </div>
                    <div class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">
                                <h4>Brands</h4>
                            </a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Categories</a></li>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">Products</div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">abc</div>
                                    <div class="panel-body">
                                        <img src="" />
                                    </div>
                                    <div class="panel-heading">
                                        $.500.00
                                        <button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer"> &copy;2016</div>
                    </div>
                </div>
                <div class="col-md-12"></div>
            </div>
        </div>
    </body>

    </html>