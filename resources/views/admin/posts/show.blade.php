@extends('layouts.app')

<h2>Detalhes do post: {{ $post->title }}</h2>
<ul>
    <li><strong>Title: </strong>{{ $post->title }}</li>
    <li><strong>Conteúdo: </strong>{{$post->content}}</li>
</ul>

<form action="{{ route('posts.destroy', $post->id)}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button class="btn btn-danger" type="submit">Deletar o Post: {{ $post->title }}</button>
</form>
