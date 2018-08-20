<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Message from {{$contact_name}}</h2>
	
	<div>
		Hello Admin,
		<p>We have received an quick contact message from website user. Following are the message details - </p>
		<label><b>Name:</b></label> 
		<p>{{$contact_name}}</p>
		<label><b>Email-ID:</b></label> 
		<p>{{$contact_mail}}</p>
		<!-- <label><b>Contact No.:</b></label> 
		<p>{{$contact_name}}</p>
		<label><b>Service choosen:</b></label> 
		<p>{{$contact_name}}</p> -->
		<label><b>Message:</b></label> 
		<p>{{$contact_message}}</p>
		<br>
		<p>Sender is waiting for your quick reply,</p>
		<h4>Impulse World Trends - Mailer System</h4>
		<img src="{{URL::to('/')}}/template/images/impulse-logo.png" class="img img-responsive" style="width: 150px;height: auto" alt="Impulse Logo">
		<br>
	</div>
	
</body>
</html>