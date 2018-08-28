<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('template/css/w3.css') }}">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="{{ URL::asset('/') }}css/bootstrap.css"> -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- angular-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- External JavaScripts ============================================= -->
    <style type="text/css">
    	*{
    		font-family: 'Roboto', 'san-serif';
    	}
    </style>
</head>
<body class="w3-light-grey">	
	<div class="w3-container">
		<div class="w3-col l12" style="margin-top: 40px">
			
		<div class="w3-col l3" style="color: #F1F1F1"><div style="visibility: none">text</div></div>
		<div class="w3-col l6 w3-card-2 w3-padding w3-white">
			<img src="{{URL::to('/')}}/template/images/impulse-logo.png" class="img img-responsive w3-margin-bottom" style="width: 100%;height: auto">
			<div class="w3-margin-top" style="height: 5px;background-color: #AB0000"></div>
			@if($status==1)
			<div class="w3-col l12 w3-padding" style="border:3px solid #AB0000">
				<div class="w3-center w3-col l12" style="margin-top: 30px">
					<i  class="w3-jumbo fa fa-hand-paper-o" style="color: #AB0000"></i>
					<h2 class="w3-xxxlarge" style="color: #AB0000">IT'S NOT THE SAME WITHOUT YOU !</h2>
				
				<p>You have been successfully unsubscribed from Impulse Email newsletter. Miss us already? The feeling's mutual. Follow <a href="{{URL::to('/')}}#widget-subscribe-form">this link</a> to rejoin</p>
				</div>
			</div>
			@endif

			@if($status==0)
			<div class="w3-col l12 w3-padding" style="border:3px solid #AB0000">
				<div class="w3-center w3-col l12" style="margin-top: 30px">
					<i  class="w3-jumbo fa fa-warning" style="color: #AB0000"></i>
					<h2 class="w3-xxxlarge" style="color: #AB0000">{{$message}}</h2>
				
				<p>Want to get ours newsletters? Then follow <a href="{{URL::to('/')}}#widget-subscribe-form">this link</a> to join our Mailer List</p>
				</div>
			</div>
			@endif
		</div>
		<div class="w3-col l3" style="color: #F1F1F1"><div style="visibility: none">text</div></div>
		</div>
	</div>
</body>
</html>