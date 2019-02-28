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
				  <a class="navbar-brand" href="profile.php">Loot Mart</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			
				  </ul>  
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			
			<div class="contaner-fluid">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div id="cart_msg"></div>
					</div>
					<div class="col-md-1"></div>
				</div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="panel panel-primary">
						  <div class="panel-heading">Cart Checkout</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-2"><b>Action</b></div>
								<div class="col-md-2"><b>Product Image</b></div>
								<div class="col-md-2"><b>Product Name</b></div>
								<div class="col-md-2"><b>Quantity</b></div>
								<div class="col-md-2"><b>Product Price</b></div>
								<div class="col-md-2"><b>Price($)</b></div>
							</div>
							<div id="cart_checkout"></div>
							
							<!--<div class="row">
								<div class="col-md-2">
									<div class="btn-group">
										<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
										<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
									</div>
								</div>
								<div class="col-md-2"><img src="image/ipad.jpg" alt="" /></div>
								<div class="col-md-2">Product Name</div>
								<div class="col-md-2"><input type="text" class="form-control" value="1" /></div>
								<div class="col-md-2"><input type="text" class="form-control" value="5000" disabled /></div>
								<div class="col-md-2"><input type="text" class="form-control" value="5000" disabled /></div>
							</div>-->
							
							<!--<div class="row">
								<div class="col-md-10"></div>
								<div class="col-md-2">
									<b>Total Amount: 50,000</b>
								</div>		
							</div>-->
							
						  </div>
						</div>
						
						
					
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
			
			
			
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>




















