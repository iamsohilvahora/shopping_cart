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
				  </ul>
				</div>
			</div>
		</nav>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div id="get_msg">
					
						<!-- Alert from SignUp form -->
					
					</div>
				</div>
			    <div class="col-md-2"></div>
			</div>
					
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					
				
				  <div class="panel panel-primary">
					  <div class="panel-heading">Customer SignUp Form</div>
					  <div class="panel-body">
						<form method="post" id="register_form">
							<div class="row">
								<div class="col-md-6">
									<label for="first_name">First Name</label>
									<input type="text" id="first_name" name="first_name" class="form-control" />
								</div>
								<div class="col-md-6">
									<label for="last_name">Last Name</label>
									<input type="text" id="last_name" name="last_name" class="form-control" />
								</div>
							</div>
						
							<div class="row">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="email" id="email" name="email" class="form-control" />
								</div>
								
							</div>
							
							
							<div class="row">
								<div class="col-md-12">
									<label for="password">Password</label>
									<input type="password" id="password" name="password" class="form-control" />
								</div>
								
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<label for="re-password">Re-Password</label>
									<input type="password" id="re-password" name="re-password" class="form-control" />
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<label for="mobile">Mobile</label>
									<input type="text" id="mobile" name="mobile" class="form-control" />
								</div>							
							</div>
							
							
							<div class="row">
								<div class="col-md-12">
									<label for="address1">Address Line1</label>
									<input type="text" id="address1" name="address1" class="form-control" />
								</div>	
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<label for="address2">Address Line2</label>
									<input type="text" id="address2" name="address2" class="form-control" />
								</div>	
							</div>
							<br />
						
							<div class="row">
								<div class="col-md-12">
									<input type="button" style="float: right;" value="Sign Up" id="signup_button" name="signup_button" class="btn btn-success btn-md" />
								</div>	
							</div>
						</form>
						
					  </div>
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









				