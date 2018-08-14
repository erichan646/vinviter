<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up Confirmation</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/email.css') }}">
</head>
<body class="confirm-account">
	<div class="row">
		<div class="small-3 columns small-centered">
			<div class="text-center logo"><img src="{{ asset('images/logo-large.png') }}" alt=""></div>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns small-centered">
			<div class="box">
				<h4>Thank you for signing up!</h4>
				<h6>We just need you to confirm your email address real quick.</h6>
				<p class="action-button"><a class="button large" href="{{ route('auth.verify', $user->token) }}">Verify your account</a></p>
			</div>
			<small class="copyright">{{ date('Y') }} &copy; Vinviter</small>
		</div>
	</div>
</body>
</html>