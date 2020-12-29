@extends('layouts.app')
    @if(session('message'))
        <div>{{ session('message') }}</div>
    @endif
<a class="btn btn-success" href="{{ route('posts.create') }}">Criar novo Post</a>
<hr>

<h3>Posts</h3>
    @foreach($posts as $post)
        <p>{{ $post->title }} com {{$post->content}}
            <a href="{{ route('posts.show', $post->id) }}">Ver</a> </p>
    @endforeach
