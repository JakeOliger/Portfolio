<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Page metadata -->
		<title>@yield('title') | Jake Oliger</title>
		<meta charset="utf-8">
		<meta name="description" content="@yield('meta_description')">
        <meta name="title" content="@yield('meta_title')">
        <meta name="author" content="Jake Oliger">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Important pre-load scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-74035902-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-74035902-1');
		</script>

		<!-- Styles -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		<!-- TODO: Create favicon and update here -->
        <link rel="icon" type="image/png" href="{{ url('images/TODO.png') }}">
		<link href="{{ url('style/style.css') }}" rel="stylesheet">
		@yield('styles')
	</head>
	<body>
		<!-- Navigation -->
		@include('partials.header')

		<!-- Primary Content -->
		<div id="content-container">
			<section id="content">
				@yield('content')
			</section>
		</div>
		<div id="gray-cover"></div>

		<!-- Scripts -->
		@include('partials.footer')
		@yield('scripts')
	</body>
</html>