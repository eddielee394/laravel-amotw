@extends('layouts.app')

@section('content')
	<div class="container">
		@include('flash::message')
		<div class="row justify-content-center text-center mb-5">
			<div class="col-md-8 justify-content-center">
				@guest
					<div class="container text-center my-2">
						<a class="btn btn-primary btn-lg btn-block" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('login') !!}">Add New</a>
					</div>
				@else
					<div class="container text-center my-2">
						<a class="btn btn-primary btn-lg btn-block" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('posts.create') !!}">Add New</a>
					</div>
				@endguest
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-8">
				@foreach ($posts as $post)
					<div class="card mb-3">
						<div class="card-header">Home</div>
						<div class="card-body">
							<h5 class="card-title">{{ $post->user->username }}</h5>
							<p class="card-text">{{ $post->body }}</p>
							<div class="card-footer d-flex justify-content-between">
								<div class="small text-muted">
									{{ $post->created_at_relative }}
								</div>
								@auth
									@if($post->user->id === Auth::user()->id)
										@include('posts.actions', ['type' => 'destroy', 'id'=>$post->id])
									@endif
								@endauth
							</div>
						</div>
					</div>
				@endforeach
				<div class="justify-content-center">
					{{ $posts->links() }}
				</div>
			</div>
		</div>
	</div>
@endsection

