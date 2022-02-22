@extends('admin.layouts.app')

@section('title', "Detalhes do Post {$post->title}")

@section('content')
    <h1>Detalhes do Post {{ $post->title }}</h1>

    <ul>
        <li>Título: <strong>{{ $post->title }}</strong></li>
        <li>Conteúdo: <strong>{{ $post->content }}</strong></li>
    </ul>

    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar o Post {{ $post->title }}</button>
    </form>
@endsection
