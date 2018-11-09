@extends('dashboard')

@section('content')
	<section class="content-header">
		<h1 class="">Posts</h1>
		<h1 class="di">
			<a class="btn btn-primary" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('posts.create') !!}">Add New</a>
		</h1>
	</section>
	<div class="content">
		<div class="clearfix"></div>
		
		@include('flash::message')
		
		<div class="clearfix"></div>
		<div class="box box-primary">
			<div class="box-body">
@foreach ($posts as $post)
	<ul class="list-group">
		<li class="list-group-item">Post body: {{ $post->body }}</li>
		<li class="list-group-item">User: {{ $post->user->username }}</li>
		<li class="list-group-item">User Id: {{ $post->user->id }}</li>
		<li class="list-group-item">Post Id: {{ $post->id }}</li>
		<li class="list-group-item">{{ $post->created_at_relative }}</li>
	</ul>
@endforeach
			</div>
			{{ $posts->links() }}
		</div>
		<div class="text-center">
		
		</div>
	</div>
@endsection

