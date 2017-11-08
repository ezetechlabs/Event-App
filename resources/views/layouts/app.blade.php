<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

	<title>Eventbrote</title>
	<style type="text/css">
		.error
		{
			color:red;
			font-weight: bold;
			font-style: italic;
		}
	</style>
</head>
<body>
	@include('layouts/partials/_nav')
	<div class="container">
		@yield('content')
	</div>
	
</body>
</html>