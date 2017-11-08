<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<title>@yield('title')</title>
 	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script type="text/javascript" src="bootstrap3\js\bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap3\css\bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">
 	<link rel="stylesheet" href="hacklike/style.css">
 	@yield('css')
    @yield('js')
</head>
<body>
	@include('header')
	<div class="banner-about-us">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4 text-center">
					<div class="PL">
						<h1>@yield('h1')</h1>
					</div>	
				</div>
			</div>
		</div>
	</div>
	@yield('content')
	@include('footer')
</body>
</html>