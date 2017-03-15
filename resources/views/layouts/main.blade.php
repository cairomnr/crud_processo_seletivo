<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title')
	</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
</head>
<body>

	@include('partials.navbar')

	<div class="container">
		<div class="row">
			@yield('content')
		</div>
	</div>

	<script type="text/javascript" src="{{ url('js/app.js') }}"></script>
	@yield('scripts')
</body>
</html>