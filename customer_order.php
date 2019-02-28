
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Shopping Cart- PHP and Bootstrap</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<style type="text/css">
			table tr td{
				padding: 10px;
			}
		</style>
	
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
				  <a class="navbar-brand" href="#">Loot Mart</a>
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
			
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading"></div>
							<div class="panel-body">
								<h1>Customer Order Details</h1>
								<hr />
								
								<div class="row">
									<div class="col-md-6">
										<img src="image/pc.jpg" style="float: right;" width="300" height="300" class="img-thumbnail" alt="" />
									</div>
									<div class="col-md-6">
										<table>
											<tr><td>Product Name: </td><td><b>PC</b></td></tr>
											<tr><td>Product Price: </td><td><b>$1000</b></td></tr>
											<tr><td>Quantity: </td><td><b>2</b></td></tr>
											<tr><td>Payment: </td><td><b>Completed</b></td></tr>
											<tr><td>Transaction ID: </td><td><b>XXXX-XXXX-XXXX-XX</b></td></tr>
										</table>
									</div>
								</div>
								
							</div>
							<div class="panel-footer"></div>
						</div>
					
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
			
		
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>




















