@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Posts
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($posts, ['route' => ['posts.update', $posts->id], 'method' => 'patch']) !!}

                        @include('posts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection