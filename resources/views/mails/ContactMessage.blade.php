<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Message from {{$contact_name}}</h2>
	
	<div>
		Hello Admin,
		<p>We have received an contact message from website user. Following are the message details - </p>
		<label><b>Name:</b>
		<p>{{$contact_name}}</p></label> 
		<label><b>Email-ID:</b> 
		<p>{{$contact_mail}}</p></label> 
		<label><b>Contact No.:</b> 
		<p>{{$contact_phone}}</p></label> 
		<label><b>Service choosen:</b> 
		<p>{{$contact_service}}</p></label> 
		<label><b>Subject:</b> 
		<p>{{$contact_subject}}</p></label>
		<label><b>Message:</b> 
		<p>{{$contact_message}}</p></label>

		<br>
		<p>Reply soon to {{$contact_name}},</p>
		<h4>Impulse World Trends - Mailer System</h4>
		<img src="{{URL::to('/')}}/template/images/impulse-logo.png" class="img img-responsive" style="width: 150px;height: auto" alt="Impulse Logo">
		<br>
	</div>
	
</body>
</html>