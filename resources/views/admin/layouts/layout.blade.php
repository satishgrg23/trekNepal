<!DOCTYPE html>
<html>
	<head>
		@include('admin.includes.header')
	</head>
<body>
<section id="conatiner" class="">
	@include('admin.includes.navigation')
	@include('admin.includes.sidebar')
	@yield('body')
</section>
	@include('admin.includes.footer')
</body>
</html>

