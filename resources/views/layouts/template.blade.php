@extends('layouts.app')
@section('page_content')
	@include('components.header.nav')
	<main class="template py-4">
		@yield('content')
	</main>
@endsection
