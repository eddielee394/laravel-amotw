<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('components.header.meta')
	
	@include('components.header.styles')
</head>
<body>
<div id="app">
	@yield('page_content')
</div>

@include('components.footer.scripts')
</body>
</html>
