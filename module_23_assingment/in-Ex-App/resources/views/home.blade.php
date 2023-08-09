@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">

                        <div class="col-lg-3 p-2 m-2 card">
                            <div class="card-body">
                                <h1 class="text-primary">100 TK</h1>
                            </div>
                            <div class="card-footer">
                                Total Income
                            </div>
                        </div>

                        <div class="col-lg-1"></div>
                        <div class="col-lg-3 p-2 m-2 card">
                            <div class="card-body">
                                <h1 class="text-danger">50 TK</h1>
                            </div>
                            <div class="card-footer">
                                Total Expense
                            </div>
                        </div>

                        <div class="col-lg-1"></div>
                        <div class="col-lg-3 p-2 m-2 card">
                            <div class="card-body">
                                <h1 class="text-success">50 TK</h1>
                            </div>
                            <div class="card-footer">
                                Net Income
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
