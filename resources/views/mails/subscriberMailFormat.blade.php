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
	<style type="text/css">
	body {
		margin: 0;            /* Reset default margin */
	}
	iframe {
		display: block;       /* iframes are inline by default */
		border: none;         /* Reset default border */
		height: 100vh;        /* Viewport-relative units */
		width: 100%;
		scroll-behavior:smooth;
	}
</style>
</head>
<body>
	<div class="container">
		<p>Hello {{$contact_email}}</p>
		<div class="col-md-12">
			<span style="text-align: center;font-size: 10px">
			If you are not able to see the attachment, then Click <a target="_blank" href="{{URL::to('/')}}/{{$file_path}}">here</a>
		</span>
		</div>
		<div class="col-md-12" style="background-color: lightgrey;padding:16px">
			<div class="col-md-2"></div>
			<div class="col-md-8" style="background-color: white;padding:16px">
				<iframe src="{{URL::to('/')}}/{{$file_path}}" frameborder="0"></iframe>
			</div>
			<div class="col-md-2"></div>
		</div>
		<p style="text-align: center;font-size: 10px">
			If you want to stop recieving mails from us, Click on <a target="_blank" href="{{URL::to('/')}}/get-connect/unsubscribeEmail/<?php echo base64_encode($contact_email); ?>">Unsubscribe</a>
		</p>
	</div>
</body>
</html>