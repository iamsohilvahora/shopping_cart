<?php
	
	include 'db.php';
	
	session_start();
	
	if(isset($_POST['category'])){
		$query = "SELECT * FROM categories";
		$run = mysqli_query($con, $query);
		echo '<div class="nav nav-pills nav-stacked">
							<li class="active"><a href=""><h4>Categories</h4></a></li>';
		
		if(mysqli_num_rows($run) > 0){
			while($row = mysqli_fetch_array($run)){
				$id = $row['cat_id'];
				$name = $row['cat_title'];
				
				echo "<li><a href='' class='category' cid='$id'>$name</a></li>";
			}
		}
		echo '</div>';
	}
	
	if(isset($_POST['brand'])){
		$query = "SELECT * FROM brands";
		$run = mysqli_query($con, $query);
		echo '<div class="nav nav-pills nav-stacked">
							<li class="active"><a href=""><h4>Brands</h4></a></li>';
		
		if(mysqli_num_rows($run) > 0){
			while($row = mysqli_fetch_array($run)){
				$id = $row['brand_id'];
				$name = $row['brand_title'];
				
				echo "<li><a href='' class='selectBrand' bid='$id'>$name</a></li>";
			}
		}
		echo '</div>';
	}
	
	if(isset($_POST['page'])){
		$query = "SELECT * FROM products";
		$run = mysqli_query($con, $query);
		
		$count = mysqli_num_rows($run);
		
		$page = ceil($count/2);
		
		for($i=1;$i<=$page;$i++){
			echo "<li><a href='#' page='$i' id='page'>$i</a></li>";
		}
		
	}
	
	
	if(isset($_POST['getProduct'])){
		$limit = 2;
		if(isset($_POST['setPage'])){
		    $page = $_POST['pageNo'];	
			$start = ($page * $limit) - $limit ;
		}
		else{
			$start = 0;
		}
		
		
		$query = "SELECT * FROM products LIMIT $start, $limit";
		$run = mysqli_query($con, $query);
		
		if(mysqli_num_rows($run) > 0){
			while($row = mysqli_fetch_array($run)){
				$id = $row['product_id'];
				$category = $row['product_cat'];
				$brand = $row['product_brand'];
				$title = $row['product_title'];
				$price = $row['product_price'];
				$image = $row['product_image'];
				
				echo "<div class='col-md-4'>
									<div class='panel panel-info'>
										  <div class='panel-heading'>
											<h3 class='panel-title'>$title</h3>
										  </div>
										  <div class='panel-body'>
											<img src='image/$image' class='img-responsive' style='height: 270px;' />
										  </div>
										  <div class='panel-heading'>$.$price.00 <button pid='$id' id='product' type='button' class='btn btn-danger btn-xs' style='float: right;'>Add to Cart</button></div>	
									</div>
								</div>";
			}
		}	
	
	}
	
	
	if(isset($_POST['get_selected_category']) || isset($_POST['get_selected_brand']) || isset($_POST['search'])){
		if(isset($_POST['get_selected_category'])){
			$id = $_POST['cat_id'];
			$query = "SELECT * FROM products WHERE product_cat = '$id'";	
		}
		else if(isset($_POST['get_selected_brand'])){
			$id = $_POST['brand_id'];
			$query = "SELECT * FROM products WHERE product_brand = '$id'";
		}
		else{
			$keyword = $_POST['keyword'];
			$query = "SELECT * FROM products WHERE product_keyword LIKE '%$keyword%'";
		}
		
		$run = mysqli_query($con, $query);
			
		if(mysqli_num_rows($run) > 0){
			while($row = mysqli_fetch_array($run)){
				$id = $row['product_id'];
				$category = $row['product_cat'];
				$brand = $row['product_brand'];
				$title = $row['product_title'];
				$price = $row['product_price'];
				$image = $row['product_image'];
				
				echo "<div class='col-md-4'>
									<div class='panel panel-info'>
										  <div class='panel-heading'>
											<h3 class='panel-title'>$title</h3>
										  </div>
										  <div class='panel-body'>
											<img src='image/$image' class='img-responsive' style='height: 270px;' />
										  </div>
										  <div class='panel-heading'>$.$price.00 <button pid='$id' id='product' type='button' class='btn btn-danger btn-xs' style='float: right;'>Add to Cart</button></div>	
									</div>
								</div>";
			}
		}
	}
	
	/*     Add to Cart  - Product      */
	if(isset($_POST['getcartProduct'])){
		if(isset($_SESSION['id'])){
			$pid = $_POST['pId']; 
			$user_id = $_SESSION['id'];
			
			$sql = "SELECT * FROM cart WHERE p_id = '$pid' AND user_id = '$user_id' ";
			$run = mysqli_query($con, $sql);
			$count = mysqli_num_rows($run);
			
			if($count > 0){
				echo "<div class='alert alert-warning'>
						  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
						  <b>Product is already added to cart Continue your shopping..!</b>
					  </div>"; 
			}
			else{
				$sql = "SELECT * FROM products WHERE product_id = '$pid'";
				$run = mysqli_query($con, $sql);
				$row = mysqli_fetch_array($run);
				
				$id = $row['product_id'];
				$title = $row['product_title'];
				$price = $row['product_price'];
				$image = $row['product_image'];
				
					$sql = "INSERT INTO cart (id, p_id, ip_add, user_id, product_title, product_image, qty, price, total_amount)
							VALUES (NULL, '$pid', '0', '$user_id', '$title', '$image', '1', '$price', '$price')";
							
					
					if(mysqli_query($con, $sql)){
						echo "<div class='alert alert-success'>
						  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
						  <b>Product is added to cart</b>
					  </div>"; 
					}			
		     }
		}
		else{
			echo "<div class='alert alert-danger'>
						  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
						  <b>Sorry..!Go and Sign Up first then you can add a product to your cart.</b>
					  </div>"; 
		}
		
		
	}
	
	if(isset($_POST['cartProducts']) || isset($_POST['cartCheckout'])){
		$user_id = $_SESSION['id'];
		
		$sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
		$run = mysqli_query($con, $sql);
		$count = mysqli_num_rows($run);
		
		if($count > 0){
			$no = 1;
			$total_amt = 0;
			
			while($row = mysqli_fetch_array($run)){
				$id = $row['id'];
				$pro_id = $row['p_id'];
				$image = $row['product_image'];
				$title = $row['product_title'];
				$price = $row['price'];
				$qty = $row['qty'];
				$tot_amt = $row['total_amount'];
				$price_arr = array($tot_amt);
				$price_sum = array_sum($price_arr);
				$total_amt = $total_amt + $price_sum;
				
				if(isset($_POST['cartProducts'])){
					echo "<div class='col-md-3'>$no</div>
							<div class='col-md-3' ><img src='image/$image' width='60px' height='50px' /></div>
							<div class='col-md-3'>$title</div>
							<div class='col-md-3'>$price.00</div>
							<div class='clearfix'></div>";
						
						$no = $no + 1;
				}
				else{
					echo "<div class='row'>
								<div class='col-md-2'>
									<div class='btn-group'>
										<a href='' remove-id='$pro_id' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></span></a>
										<a href='' update-id='$pro_id' class='btn btn-primary update'><span class='glyphicon glyphicon-ok-sign'></span></a>
									</div>
								</div>
								<div class='col-md-2'><img src='image/$image' width='60px' height='60px' /></div>
								<div class='col-md-2'>$title</div>
								<div class='col-md-2'><input type='text' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty' /></div>
								<div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id' value='$price' disabled /></div>
								<div class='col-md-2'><input type='text' class='form-control tot_amt' pid='$pro_id' id='tot_amt-$pro_id' value='$tot_amt' disabled /></div>
							</div>";
				}	
			}
			
			if(isset($_POST['cartCheckout'])){
				echo "<div class='row'>
								<div class='col-md-8'></div>
								<div class='col-md-4'>
									<h2>Total Amount: $total_amt</h2>
								</div>		
							</div>";
			}
			
			echo '<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
						  <input type="hidden" name="cmd" value="_cart">
						  <input type="hidden" name="business" value="sohilvahora1996@gmail.com">
						  <input type="hidden" name="upload" value="1" />';
			
			$x=0;
			$user_id = $_SESSION['id'];
		    $sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
		    $run = mysqli_query($con, $sql);
			while($row = mysqli_fetch_array($run)){
				$x++;
				
				echo '<input type="hidden" name="item_name_'.$x.'" value="'.$row['product_title'].'">
						  <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
						  <input type="hidden" name="amount_'.$x.'" value="'.$row['price'].'">
						  <input type="hidden" name="quantity_'.$x.'" value="'.$row['qty'].'">';
			}
						
			echo '<input style="float: right; margin-right: 100px;" type="image" name="submit"
							src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png"
							alt="PayPal - The safer, easier way to pay online">
					</form>';
		}	
	}
	
	/**  Count cart products **/
	if(isset($_POST['count']) AND isset($_SESSION['id'])){
		$user_id = $_SESSION['id'];
		
		$sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
		$run = mysqli_query($con, $sql);
		$count = mysqli_num_rows($run);
		echo $count;
	}
	
	if(isset($_POST['removeFromCart'])){
		$user_id = $_SESSION['id'];
		$pid = $_POST['removeId'];
		
		$sql = "DELETE FROM cart WHERE user_id = '$user_id' AND p_id = '$pid'";
		$run = mysqli_query($con, $sql);
		
		if($run){
			echo "<div class='alert alert-warning'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
					  <b>Product is Removed from Cart Continue your shopping..!</b>
			      </div>";
		}
	}
	
	
	if(isset($_POST['updateCart'])){
		$user_id = $_SESSION['id'];
		$pid = $_POST['updateId'];
		$qty = $_POST['qty'];
		$price = $_POST['price'];
		$total = $_POST['total'];
		
		
		$sql = "UPDATE cart SET qty = '$qty', price='$price', total_amount='$total' WHERE user_id='$user_id' AND p_id='$pid'";
		$run = mysqli_query($con, $sql);
		
		if($run){
			echo "<div class='alert alert-success'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
					  <b>Product is updated.</b>
			      </div>";
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

?>