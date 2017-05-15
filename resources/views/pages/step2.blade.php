@extends('layouts.page')

@section('title', 'Fix My Council - Step 1')

@section('content')
  
    <div class="site__heading">
        <div class="container">
            <h1 class="display-3 hero__title">Fix My Council - Step 2</h1>
            <p class="hero__description">
                Select a suburb and council you belong to.
            </p>
        </div>
    </div>

    <div class="content__container">
        <div class="container">
            <div class="row">
                <div class="col-md-5 step2 completed">
                    <div class="col-md-12">
                        @if(Session::has('message'))
                            <p class="alert alert-danger">{{ Session::get('message') }}</p>
                        @endif

                        <h2>Step 1</h2>
                        <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('report.step2') }}">
                            {{ csrf_field() }}
                            <input class="form-control mr-sm-2" type="text" placeholder="{{ $postcode }}" name="postcode" value="{{ $postcode }}" disabled>
                        </form>
                    </div>

                    <div class="col-md-12 step2">
                        <h2>Step 2</h2>
                        <p>Select your suburb and council:</p>
                        <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('report.step3') }}">
                            {{ csrf_field() }}
                            @foreach($suburbs as $suburb)
                                <input type="hidden" name="suburbName" value="{{ $suburb->name }} - {{ $suburb->council->name }}"/>
                                <input type="hidden" name="postcodeSubmitted" value="{{ $postcode }}"/>
                                <label>
                                    <input class="form-control mr-sm-2" type="radio" name="suburb" value="{{ $suburb->id }}"/>
                                    {{ $suburb->name }} - {{ $suburb->council->name }}
                                </label>
                            @endforeach
                            <button class="btn btn-outline-success my-2 my-sm-0 hero__search" type="submit">Search</button>
                        </form>
                    </div>
                </div>

                <div class="col-md-7">
                    <h2>Step 3</h2>
                    <p>You'll be able to fill in this form once you've provided a postcode and suburb.</p>
                    <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('report.submit') }}">
                        <fieldset class="form-group" disabled>
                            <div class="form-group">
                                <label for="problemTitle">Title</label>
                                <input type="text" class="form-control" id="problemTitle" aria-describedby="titleHelp" placeholder="Enter email">
                                <small id="titleHelp" class="form-text text-muted">
                                    Give us a brief title of the problem
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="problemDescription">Description</label>
                                <textarea class="form-control" id="problemDescription" rows="3" aria-describedby="descriptionHelp"></textarea>
                                <small id="descriptionHelp" class="form-text text-muted">
                                    Describe the problem and any solutions you might want to put forward if possible.
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="problemImage">Image</label>
                                <input type="file" class="form-control-file" id="problemImage" aria-describedby="imageHelp">
                                <small id="imageHelp" class="form-text text-muted">
                                    Upload an image of the problem.
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="problemName">Name</label>
                                <input type="text" class="form-control" id="problemName" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">
                                    Leaving your first name is fine.
                                </small>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection 
