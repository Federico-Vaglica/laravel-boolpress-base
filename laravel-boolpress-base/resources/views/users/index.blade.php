@extends('layouts.app')
@section('content')
    user index
<h2>Elenco Utenti</h2>
@foreach ($users as $user)
    <ul>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
        <li>{{$user->avatar->avatar}}</li>
    </ul>

    @foreach ($user->posts as $post)
    <div>
        <p>{{$post->title}}</p>
        <p>{{$post->body}}</p>
    </div>
    @endforeach
@endforeach
@endsection 