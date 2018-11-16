@extends('layouts.template')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				@include('posts.actions', ['type'=>'store'])
			</div>
		</div>
	</div>
@endsection
