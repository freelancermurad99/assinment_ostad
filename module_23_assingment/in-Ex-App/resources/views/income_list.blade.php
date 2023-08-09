@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Income List') }} <a href="{{route('income_add')}}" class="btn btn-primary" style="float: right">Add Income</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Amount</th>
                            <th scope="col">Description</th>
                            <th scope="col">Income Date</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $item)
                            <tr>
                                <th scope="row">{{$item->amount}}</th>
                                <td>{{$item->description}}</td>
                                <td>{{$item->income_date}}</td>
                                <td>
                                    <a href="edit/{{$item->id}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('income_del', ['id'=>$item->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                          
                        </tbody>
                      </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
