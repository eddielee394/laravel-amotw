<?php
/**
 * actions.blade.php
 *
 * @description
 *
 * @author  Eddie Padin
 *
 * @project messageboard
 */
?>

@switch($type)
	@case('destroy')
	{!! Form::open(['route' => ['posts.destroy', $id], 'method' => 'delete']) !!}
	{!! Form::button('<i class="fa fa-trash"></i>', [
		'type' => 'submit',
		'class' => 'btn btn-danger btn-xs',
		'onclick' => "return confirm('Are you sure?')"
	]) !!}
	{!! Form::close() !!}
	@break
	@case('update')
	{!! Form::model($posts, ['route' => ['posts.update', $posts->id], 'method' => 'patch']) !!}
	@include('posts.fields')
	{!! Form::close() !!}
	@break
	@case('store')
	{!! Form::open(['route' => 'posts.store']) !!}
	@include('posts.fields')
	{!! Form::close() !!}
	@break
	@default
	{!! Form::open(['route' => 'posts.store']) !!}
	@include('posts.fields')
	{!! Form::close() !!}
@endswitch
