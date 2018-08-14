<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title') - Vinviter</title>
</head>
<body>
	@yield('body')
	<div class="loading-overlay">
		<span><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i> Please wait</span>
	</div>
</body>
</html>