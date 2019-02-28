<?php
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Shopping Cart- PHP and Bootstrap</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	
	</head>
	<body>	
		<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  data-target="#navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="index.php">Loot Mart</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
					<li>
						<form class="form-inline">
							<div class="form-group">
							  <input type="text" id="searchProduct" class="form-control" placeholder="Search product" style="width: 300px; margin-top: 10px; margin-left: 20px;">
							</div>
							<button type="button" id="searchButton" class="btn btn-primary" style="margin-top: 10px; margin-left: 10px;">Search</button>
						  </form>
					</li>
				  </ul>
				  
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="#" class="dropdown-toggle" id="cartProduct" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart <span class="badge">0</span></a>
						<div class="dropdown-menu" style="width: 550px;">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-3">SL. No.</div>
										<div class="col-md-3">Product-Image</div>
										<div class="col-md-3">Product-Name</div>
										<div class="col-md-3">Price($)</div>
									</div>
								</div>
								<div class="panel-body">
										<div id="getCartProduct">
											
										</div>
												<!--<div class="col-md-3">SL. No.</div>
												<div class="col-md-3">Product-Image</div>
												<div class="col-md-3">Product-Name</div>
												<div class="col-md-3">Price($)</div>-->
								
								</div>
								<div class="panel-footer"></div>
							</div>
						</div>
					
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1" aria-haspopup="true" aria-expanded="true"><span class="glyphicon glyphicon-user"></span><?php echo "Hi, " .$_SESSION["name"];  ?></a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
								<li class="divider"></li>
								<li><a href="#">Change Password</a></li>
								<li class="divider"></li>
								<li><a href="logout.php">Logout</a></li>
						 </ul>
					</li>
					
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			
			
			<div class="containe-fluid">
				<div class="row">
					<div class="col-md-1"></div>
					
					<div class="col-md-2">
						<div id="getCat"> </div>
						<div id="getBrand"> </div>
						
						<!--<div class="nav nav-pills nav-stacked">
							<li class="active"><a href="">Categories</a></li>
							<li><a href="">Categories</a></li>
							<li><a href="">Categories</a></li>
							<li><a href="">Categories</a></li>
							<li><a href="">Categories</a></li>
							<li><a href="">Categories</a></li>
						</div>-->
						<!--<div class="nav nav-pills nav-stacked">
							<li class="active"><a href="">Brand</a></li>
							<li><a href="">Categories</a></li>
							<li><a href="">Categories</a></li>
							<li><a href="">Categories</a></li>
							<li><a href="">Categories</a></li>
							<li><a href="">Categories</a></li>
						</div>-->
						
					</div>
					
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div id="productverification"></div>
							</div>
						</div>
						<div class="panel panel-info">
						  <div class="panel-heading">
							<h3 class="panel-title">Products</h3>
						  </div>
						  <div class="panel-body">
							<div id="get_product"> </div>
							
						  </div>	
								<!--<div class="col-md-4">
									<div class="panel panel-info">
										  <div class="panel-heading">
											<h3 class="panel-title">Camera</h3>
										  </div>
										  <div class="panel-body">
											<img src="image/camera.jpg" class="img-responsive" style="height: 270px;" alt="" />
										  </div>
										  <div class="panel-heading">$500 <button type="button" class="btn btn-danger btn-xs" style="float: right;">Add to Cart</button></div>	
									</div>
								</div>-->
							
						  
						  <div class="panel-footer">Panel footer</div>	
						</div>
					</div>
					
					<div class="col-md-1"></div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<center>
							<ul class="pagination pagination-md" id="getPage">
								<li><a href="#">1</a></li>
							</ul>
						</center>
					</div>
				</div>
			</div>
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>




















