<?php
	include('db.php');
	
	session_start();
	
	if(isset($_POST['userLogin'])){
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = md5($_POST['password']);
		
		$sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password' ";
		
		$run = mysqli_query($con, $sql);

		$count = mysqli_num_rows($run);	
		
		if($count == 1){
			$row = mysqli_fetch_array($run);
			
			$_SESSION['id'] = $row['user_id'];
			$_SESSION['name'] = $row['first_name'];
			
			echo 'true';
		}
	}


?>