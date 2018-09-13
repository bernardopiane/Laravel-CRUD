@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
<h1>{{$title}}</h1>
<p>This is the laravel application from the </p>
<a href="/lsapp/public/login" type="button" class="btn btn-primary">Primary</a>
<a href="/lsapp/public/register" type="button" class="btn btn-success">Register</a>
</div>
@endsection
