<!DOCTYPE html>
<html>
	<head>
		@include('sites.includes.header')
	</head>
<body>
	@include('sites.includes.navigation')
	@yield('body')
	@include('sites.includes.footer')
</body>
</html>