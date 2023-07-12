@extends('app')
@section('content')
    @foreach ($posts as $post)
        <div class="content p-3">
            <img src="{{$post->thumbnail}}" alt="" style="width: 100%">
            <h3 class="p-3">{{$post->title}}</h3>
            <p class="p-3">{{$post->desc}}</p>
        </div>
    @endforeach

    <h3>Comments</h3>
    <hr>
@endsection