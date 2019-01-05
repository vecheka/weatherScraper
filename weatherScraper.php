<!doctype html>
<html lang="en">
	<head>
    <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="//fonts.googleapis.com/css?family=Major+Mono+Display|Montserrat:500,500i" rel="stylesheet">
		<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
		<!-- Bootstrap CSS -->
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel = "stylesheet" href = "css/bootstrap.min.css">
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src = "js/bootstrap.min.js"> </script>
		<script type="text/javascript" src="jquery.min.js"></script>
		
		<title>Weather Scraper</title>
		
	
  
  
	
	<style>
	
		.main_page {
			height: 100vh;
			min-height: 400px;
			background-image: url("images/background.jpg");
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
		}
		
		.header {
			text-align: center;
			color: #FFF;
			
		}
		
		
		
		
		#search_bar {
			width: 50%; 
			text-align: center;
		}
		
		#search_btn {
			padding-left: 46%;
		}
		
		.toast {
			background-color: white;
			width: 35%;
			min-height: 50px;
			display: none;
			
		}
		.toast-header {
			border-bottom: 1px solid grey;
		}
		
		
		
		
	</style>	
		
	
  
  
	</head>
	<body>
		
		<header class = "main_page">
			
			<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
				<div class = "toast" role = "alert" aria-live = "assertive" aria-atomic = "true">
				
					<div class = "toast-header">
						<strong class = "mr-auto"> Weather Info </strong>
						<button type = "button" class = "ml-2 mb-1 close" data-dismiss = "toast" aria-label = "Close">
							<span aria-hidden = "true"> &times;</span>
						</button>
					
					</div>
					
					<div class = "toast-body ml-2">
						<p> </p>
					</div>
				
				</div>
			</div>
			
			
			
			<form method = "get">
		
				<div class = "container">
					<div class = "row">
						
						<div class = "col-md-12">
							<h1 class = "header"> Weather Forecast </h1>
							<p class = "header" style = "font-size: 120%;"> Enter a city to get the forecast of the weather </p>
							<div id = "search_bar" class = "input-group mx-auto pt-5" >
								<div class = "input-group-prepend">
									<span class = "input-group-text"> <i class="fa fa-search"></i> </span>
								</div>
								<input id = "city" type = "search" class = "form-control" name = "city" placeholder = "Eg. London, Paris, New York"/>
								
							</div>
						</div>
					</div>
					
					<div class = "row">
						<div class = "col-md-12">
							<div id = "search_btn" class = "input-group pt-5" >
								<input  id = "submit" type = "submit" name = "submit" value = "Search" class = "btn btn-success"/>
							</div>

						</div>
					
					</div>
					
					
				</div>
			
			</form>
			
			
			
		</header>
		
		
		
		
		
		<script>
			
			var mid_h = $(".main_page").height() / 6;
			// var mid_w = $(".main_page").width() / 3;			
			$("h1").css("padding-top", mid_h + "px");
			// $("#search_btn").css("padding-left",mid_w + "px");
			
			$(".toast-header button").click(function() {
				
				$(".toast").hide();
				
			});
			
			
			$("#submit").click(function(e) {
				e.preventDefault();
				
				var city = $("#city");
				$(".toast").hide();
				
				if (city.val() == "") {
					$(".toast-body p").html("Please enter a valid city");
					// $(".toast-body p").attr("class", "alert alert-danger");
					$(".toast").show();
				}
				else {
					$.get("scraper.php?city=" + city.val(), function(data) {
					// alert(data);
					
					if (data != null) {
						$(".toast-body p").html(data);
						$(".toast-body p").attr("class", "");
						$(".toast").show(500);
					}
					
					
					
					
				});
				}
				
				
			});
			
		
		</script>
		
	
	</body>
</html>