<!-- posts.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <h1>All Posts</h1>

    @foreach ($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p>Category: {{ $post->category->name }}</p>
        </div>
    @endforeach
@endsection
