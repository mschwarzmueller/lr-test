<!DOCTYPE html>
<html lang="en">

	<head>

		<!-- Meta -->

			<!-- Charset -->
			<meta charset="UTF-8">
			<!-- Description -->
			<meta name="description" content="">
			<!-- Keywords -->
			<meta name="keywords" content="">
			<!-- Author -->
			<meta name="author" content="">
			<!-- Viewport -->
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- APP CSS -->
		<link rel="stylesheet" href="{{ elixir('assets/css/app/index.css') }}">

		<!-- Favicon -->
		<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/vnd.microsoft.icon">

		<!-- Title -->
		<title></title>

	</head>

	<body>

		<!-- Header -->
		<header class="header">

			@include('app.partials.header')

		</header><!-- Header /END -->

		<!-- Main -->
		<main>

			@yield('content')

		</main><!-- Main /END -->

		<!-- Footer -->
		<footer class="footer">

			@include('app.partials.footer')

		</footer><!-- Footer /END -->

		<!-- APP JS -->
		<script src="{{ elixir('assets/js/app/index.js') }}"></script>

	</body>

</html>