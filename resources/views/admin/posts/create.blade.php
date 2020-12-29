@extends('layouts.app')
<h3>Cadastrar novo post</h3>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <div class="input-group mb-6">
        <form action="{{ route('posts.store') }}" method="POST" class="form">
            @csrf
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Digite o Título">
            <textarea class="form-control" name="content" id="content" cols="30" rows="4" placeholder="Digite o Conteúdo">{{ old('content') }}</textarea>
            <button class="btn btn-success" type="submit">Enviar</button>
        </form>
    </div>
