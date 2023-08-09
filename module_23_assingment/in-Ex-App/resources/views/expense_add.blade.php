@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Expense Add') }} <a href="{{route('expense')}}" class="btn btn-primary" style="float: right">Expense List</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('expense_add_store')}}" method="post">
                        @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="exampleFormControlFile1">Amount</label>
                                    <input type="text" name="amount" class="form-control" required>
                                  </div>
                                  <div class="form-group col-lg-6">
                                    <label for="exampleFormControlFile1">Expense Date</label>
                                    <input type="date" name="expense_date" class="form-control" required>
                                  </div>
                            </div>
                            <div class="form-group col-lg-12">
                              <label for="exampleFormControlFile1">Description</label>
                              <textarea name="description" id="" cols="10" rows="10" class="form-control" required></textarea>
                            </div>
                            <br>
                          <input type="submit" class="form-control btn btn-success" value="Save">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
