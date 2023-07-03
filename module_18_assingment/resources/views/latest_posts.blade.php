<!-- latest_posts.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <h1>Latest Posts for Each Category</h1>

    @foreach ($categories as $category)
        <div class="category">
            <h2>{{ $category->name }}</h2>

            @if ($category->latestPost)
                <div class="latest-post">
                    <h3>{{ $category->latestPost->title }}</h3>
                    <p>{{ $category->latestPost->content }}</p>
                </div>
            @else
                <p>No posts found for this category.</p>
            @endif
        </div>
    @endforeach
@endsection
