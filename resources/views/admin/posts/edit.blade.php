@extends('admin.layouts.app')

@section('title', "Editar Post {$post->title}")

@section('content')
    <h1>Editar Post {{ $post->title }}</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @method('PUT')
        @include('admin.posts._partials.form')
    </form>
@endsection
