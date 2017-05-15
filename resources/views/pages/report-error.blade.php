@extends('layouts.page')

@section('title', 'Fix My Council - Step 1')

@section('content')

    <div class="site__heading">
        <div class="container">
            <h1 class="display-3 hero__title">Fix My Council</h1>
        </div>
    </div>

    <div class="content__container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 success">
                    @if(Session::has('message'))
                        <p class="alert alert-danger">{{ Session::get('message') }}</p>
                    @endif

                    <a href="{{ route('report.step1') }}">Click Here</a> to try again.
                </div>
            </div>
        </div>
    </div>

@endsection 
