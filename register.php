<?php
	include 'db.php';
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];  
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['re-password'];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	
	$name = "/^[A-Z][a-zA-Z ]+$/";
	$emailValidation = "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
	$number = "/^[0-9]+$/";
	
	
	
	if(empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) ||empty($address1) || empty($address2)){
		echo "<div class='alert alert-warning'>
				  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
				  <b>Please Fill All Fields ...!</b>
			</div>";
				exit();
	}
	
	else{
		if(!preg_match($name, $first_name)){
			echo "<div class='alert alert-warning'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
					  <b>$first_name is not valid</b>
				 </div>";
			exit();
		}
		
		if(!preg_match($name, $last_name)){
			echo "<div class='alert alert-warning'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
					  <b>$last_name is not valid</b>
			      </div>";
			exit();
		}
		
		if(!preg_match($emailValidation, $email)){
			echo "<div class='alert alert-warning'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
					  <b>This $email is not valid</b>
			      </div>";
			exit();
		}
		
		if((strlen($password) < 9) && (strlen($repassword) < 9)){
			echo "<div class='alert alert-warning'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
					  <b>Password is weak</b>
			      </div>";
			exit();
		}
		
		if($password != $repassword){
			echo "<div class='alert alert-warning'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
					  <b>Password is not matches</b></div>";
			exit();
		}
		
		if(!preg_match($number, $mobile)){
			echo "<div class='alert alert-warning'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
					  <b>This is not valid mobile number</b>
			      </div>";
			exit();
		}
		
		if(!(strlen($mobile) == 10)){
			echo "<div class='alert alert-warning'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
					  <b>Mobile number must be 10 digit</b>
			      </div>";
			exit();
		}
		
		/* Check for existing email address in our database */
		$query = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
		$run = mysqli_query($con, $query);
		$count_email = mysqli_num_rows($run);
		
		if($count_email > 0){
			echo "<div class='alert alert-danger'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
					  <b>Email address is already available. Try another email address</b>
			      </div>";
			exit();
		}
		else{
			$password = md5($password);
			
			$query = "INSERT INTO user_info (user_id, first_name, last_name, email, password, mobile, address1, address2) 
						VALUES (NULL, '$first_name', '$last_name', '$email', '$password', '$mobile', '$address1', '$address2')";
			
			$run = mysqli_query($con, $query);
			if($run){
				echo "<div class='alert alert-success'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
					  <b>You are registered successfully</b>
			      </div>";
				 
			}	
		}
	}
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>