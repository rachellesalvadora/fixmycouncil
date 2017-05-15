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
                <div class="col-md-5 step3 completed">
                    <div class="col-md-12">
                        @if(Session::has('message'))
                            <p class="alert alert-danger">{{ Session::get('message') }}</p>
                        @endif

                        <h2>Step 1</h2>
                        <p>Enter your postcode.</p>
                        <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('report.step2') }}">
                            {{ csrf_field() }}
                            <input class="form-control mr-sm-2" type="text" placeholder="Postcode" name="postcode" value="{{ $postcode }}" disabled>
                        </form>
                    </div>

                    <div class="col-md-4 step3 completed">
                        <h2>Step 2</h2>
                        {{ $suburbName }}
                    </div>
                </div>

                <div class="col-md-7">
                    <h2>Step 3</h2>
                    <p>You'll be able to fill in this form once you've provided a postcode and suburb.</p>
                    <form class="form-inline my-2 my-lg-0" method="post" enctype="multipart/form-data" action="{{ route('report.submit') }}">
                        {{ csrf_field() }}
                        <fieldset class="form-group">
                            <input type="hidden" name="suburbId" value="{{ $suburbId }}"/>
                            <div class="form-group">
                                <label for="problemTitle">Title</label>
                                <input type="text" class="form-control" id="problemTitle" name="problemTitle" aria-describedby="titleHelp" placeholder="Enter email" required>
                                <small id="titleHelp" class="form-text text-muted">
                                    Give us a brief title of the problem
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="problemDescription">Description</label>
                                <textarea class="form-control" id="problemDescription" name="problemDescription" rows="3" aria-describedby="descriptionHelp" required></textarea>
                                <small id="descriptionHelp" class="form-text text-muted">
                                    Describe the problem and any solutions you might want to put forward if possible.
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="problemImage">Image</label>
                                <input type="file" class="form-control-file" id="problemImage" name="problemImage" aria-describedby="imageHelp" required>
                                <small id="imageHelp" class="form-text text-muted">
                                    Upload an image of the problem.
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="problemName">Name</label>
                                <input type="text" class="form-control" id="problemName" name="problemName" aria-describedby="nameHelp" placeholder="Name" required>
                                <small id="nameHelp" class="form-text text-muted">
                                    Leaving your first name is fine.
                                </small>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection 
