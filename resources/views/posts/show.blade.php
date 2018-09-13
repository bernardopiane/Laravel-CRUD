@extends('layouts.app') 
@section('content')
<h1>{{$post->title}}</h1>
<div>
    <p>{!!$post->body!!}</p>
</div>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
<hr> @if (!auth::guest()) @if (Auth::user()->id == $post->user_id)
<a href="{{$post->id}}/edit" class="btn btn-primary">Edit</a> {!!Form::open(['action' => ['PostsController@destroy', $post->id],
'method' => 'POST', 'class' => 'float-right'])!!} {{Form::hidden('_method', 'DELETE')}} {{Form::submit("Delete", ['class'
=> 'btn btn-danger'])}} {!!Form::close()!!}
<hr> @endif @endif
<a href="/lsapp/public/posts" class="btn btn-secondary">Go Back</a>
@endsection