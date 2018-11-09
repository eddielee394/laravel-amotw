@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {!! Form::open(['route' => 'posts.store']) !!}
                @include('posts.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
