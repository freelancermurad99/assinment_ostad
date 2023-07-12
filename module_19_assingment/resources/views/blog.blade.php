@extends('app')
@section('content')
@foreach ($all_posts as $item)
  <div class="card p-3 m-3">
    <div class="row">
        <div class="col-3">
            <img class="card-img-top" style="height: 100%" src="{{$item->thumbnail}}" alt="Card image cap">
        </div>
        <div class="col">
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <p class="card-text">{{$item->short_desc}}</p>
                <a href="/post_details/{{$item->id}}" class="">Red More..</a>
            </div>
        </div>
    </div>
  </div>
@endforeach
@endsection