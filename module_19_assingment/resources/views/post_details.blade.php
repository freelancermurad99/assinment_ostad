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
    <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="name">Comment</label>
                    <textarea name="comment" id="" cols="90" rows="3" class="form-control"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Submit Your Comment">
    </form>
    <br>
    <hr>
    @foreach ($comments as $comment)
    <div class="card p-3 m-3">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <h5 class="card-title text-primary">{{$comment->name}}</h5>
                    <p class="card-text">{{$comment->comments}}</p>
                </div>
            </div>
        </div>
      </div>
    @endforeach
@endsection