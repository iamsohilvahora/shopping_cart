$(document).ready(function(){
	cat();
	brand();
	product();
	
	function cat(){
		$.ajax({
			type: "POST",
			url: "action.php",
			data: {category:1},
			success: function(data){
				$("#getCat").html(data);
			}
		});
	}
	
	function brand(){
		$.ajax({
			type: "POST",
			url: "action.php",
			data: {brand:1},
			success: function(data){
				$("#getBrand").html(data);
			}
		});
	}
	
	function product(){
		$.ajax({
			type: "POST",
			url: "action.php",
			data: {getProduct:1},
			success: function(data){
				$("#get_product").html(data);
			}
		});
	}
	
	$('body').delegate('.category','click', function(event){
		event.preventDefault();
		var cid = $(this).attr('cid');
		
		$.ajax({
			type: "POST",
			url: "action.php",
			data: {get_selected_category:1, cat_id:cid},
			success: function(data){
				$("#get_product").html(data);
			}
		});
	});
	
	$('body').delegate('.selectBrand','click', function(event){
		event.preventDefault();
		var bid = $(this).attr('bid');
		
		$.ajax({
			type: "POST",
			url: "action.php",
			data: {get_selected_brand:1, brand_id:bid},
			success: function(data){
				$("#get_product").html(data);
			}
		});
	});
	
	$("#searchButton").click(function(){
		var keyword = $("#searchProduct").val();
		
		if(keyword != ""){
				$.ajax({
				type: "POST",
				url: "action.php",
				data: {search:1, keyword:keyword},
				success: function(data){
					$("#get_product").html(data);
				}
			});
		}
	});
	
	$("#signup_button").click(function(event){
		event.preventDefault();
		
		$.ajax({
				method: "POST",
				url: "register.php",
				data: $("form").serialize(),
				success: function(data){
					
						$("#get_msg").html(data);		
						$("#register_form")[0].reset();		
					
					
				}
		});	
	});
	
	$("#login").click(function(event){
		event.preventDefault();
		var email = $("#email").val();
		var password = $("#password").val();
		
		$.ajax({
				method: "POST",
				url: "login.php",
				data: {userLogin:1,email: email, password: password},
				success: function(data){
					
					if(data == 'true'){
						window.location.href = "profile.php"; 
					}
					
				}
		});	
		
	});
	
	cart_count();
	/* Add to cart - product is added or not */
	$('body').delegate('#product','click', function(event){
		event.preventDefault();
		
		var pid = $(this).attr('pid');
		
		$.ajax({
				method: "POST",
				url: "action.php",
				data: {getcartProduct:1, pId:pid},
				success: function(data){
						$("#productverification").html(data);
						cart_count();
						cartProduct();
				}
				
					
		});		
		
	});
	

	function cart_count(){
			$.ajax({
				method: "POST",
				url: "action.php",
				data: {count:1},
				success: function(data){
						$(".badge").html(data);
				}
					
		    });	
	}
		
	cartProduct();
	function cartProduct(){
			$.ajax({
					method: "POST",
					url: "action.php",
					data: {cartProducts:1},
					success: function(data){
							$("#getCartProduct").html(data);
					}
						
			});	
	}
	
		
			
		
	
	
	cartCheckout();
	function cartCheckout(){
		$.ajax({
				method: "POST",
				url: "action.php",
				data: {cartCheckout:1},
				success: function(data){
						$("#cart_checkout").html(data);
				}
					
		});		
	}
	
	$('body').delegate('.qty', 'keyup', function(){
		var pid = $(this).attr('pid');
		
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = qty*price;
		
		$("#tot_amt-"+pid).val(total);	
	});
	
	$('body').delegate('.remove', 'click', function(event){
		event.preventDefault();
		var pid = $(this).attr('remove-id');
		
		$.ajax({
				method: "POST",
				url: "action.php",
				data: {removeFromCart:1, removeId: pid},
				success: function(data){
						$("#cart_msg").html(data);
						cartCheckout();	
				}		
		});	
		
	});
	
	$('body').delegate('.update', 'click', function(event){
		event.preventDefault();
		var pid = $(this).attr('update-id');
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = $("#tot_amt-"+pid).val();
		
		$.ajax({
				method: "POST",
				url: "action.php",
				data: {updateCart:1, updateId: pid, qty:qty, price:price, total:total},
				success: function(data){
						$("#cart_msg").html(data);
						cartCheckout();	
				}		
		});	
		
		
	});
	
	page();
	function page(){
		
		$.ajax({
				method: "POST",
				url: "action.php",
				data: {page:1},
				success: function(data){
						$("#getPage").html(data);
			
				}		
		});	
	}
	
	$('body').delegate('#page','click', function(){
		var pn = $(this).attr('page');
		$.ajax({
				method: "POST",
				url: "action.php",
				data: {getProduct:1, setPage:1, pageNo:pn},
				success: function(data){
						$("#get_product").html(data);
			
				}		
		});	
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
});