@extends('layouts.app')
@section('content')
<h2>Elenco post</h2>
@if(session('insert'))
<div>
    {{session('insert')}}
</div>
@endif
@foreach ($posts as $post)
<div>
    <p>Titolo: {{$post->title}}</p>
    <p>Post: {{$post->body}}</p>
</div>
@endforeach
@endsection