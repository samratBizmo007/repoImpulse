<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<div class="container w3-margin-bottom">
		<a href="{{URL::to('/')}}" class="standard-logo w3-padding-top"><img src="{{URL::to('/')}}/template/images/impulse-logo.png" class="img img-responsive" style="width: 230px;height: auto" alt="Impulse Logo"></a>
		<p>Hello {{$contact_name}},</p>
	<p>This is to notify you with our Trending Products. Checkout the following listed products and do contact us.</p>
	</div>
	
	<div class="container w3-card w3-margin-bottom">
		<div class="col-lg-12 w3-center">
			<h3>Trending Products</h3>
			<p>Checkout our new Trending products here...</p>
		</div>
		<div class="col-lg-12" style="padding: 40px;background-color: lightgrey">
			<ul style="list-style: none;">
				@foreach($products as $prod)
				<li>
					<a href="{{URL::to('/')}}/products/info/<?php echo base64_encode($prod->product_id); ?>" target="_blank">
						<label style="color:red;font-size: 20px">{{$prod->prod_name}}</label>
					</a><br>

					<a href="{{URL::to('/')}}/category/info/<?php echo base64_encode($prod->cat_id); ?>" target="_blank">
						<label style="color:grey;font-size: 16px">Category: {{$prod->category_name}}</label>
					</a><br>

					<a href="{{URL::to('/')}}/brands/info/<?php echo base64_encode($prod->brand_id); ?>" target="_blank">
						<label style="color:black;font-size: 12px">Brand: {{$prod->brand_name}}</label>
					</a><br>
				</li>
				<hr>
				@endforeach
			</ul>
		</div>
	</div>
	<div class="container w3-margin-bottom">
		<p>Contact us for more details,</p>
		<h4>Impulse World Trends</h4>
		<img src="{{URL::to('/')}}/template/images/impulse-logo.png" class="img img-responsive" style="width: 150px;height: auto" alt="Impulse Logo">
		<br>
		<address>
			<strong>Headquarters:</strong><br>
			C.T.S. No.799-A, Bhandarkar Road,<br>
			Near VLCC,, Deccan Gymkhana,<br>
			Pune, Maharashtra 411004<br>
		</address>
		<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 84110 09080<br>
	</div>
	
	<br>
	<div class="w3-col l12 w3-center">
		<p class="w3-small">This is auto-generated mail from Impulse World Trends system. Do not reply to this email address.</p>
	</div>
</body>
</html>