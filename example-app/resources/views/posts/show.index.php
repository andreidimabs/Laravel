@extends('layout.app')
@section('content')

<a href="/posts" class = "btn btn-default">Back</a>
<h3>{{$post->title}}</h3>
<small>Written On {{$post->created_at}}</small>

<div class="container">
    {{$post->body}}
</div>
@endsection