@extends('layouts.page')

@section('title', 'Fix My Council - Step 1')

@section('content')

    <div class="site__heading">
        <div class="container">
            <h1 class="display-3 hero__title">Fix My Council - Step 1</h1>
        </div>
    </div>

    <div class="content__container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page__description">
                    <p>
                        To get started please tell provide us with your postcode.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 steps steps__1">
                    @if(Session::has('message'))
                        <p class="alert alert-danger">{{ Session::get('message') }}</p>
                    @endif

                    <h2>Step 1</h2>
                    <p>Enter your postcode.</p>
                    <form class="form my-2 my-lg-0 step__1--form" method="post" action="{{ route('report.step2') }}">
                        {{ csrf_field() }}
                        <fieldset class="form-group">
                            <div class="form-group">
                                <input class="form-control mr-sm-2" type="text" placeholder="Postcode" name="postcode" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-success my-2 my-sm-0 hero__search" type="submit">Search</button>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <div class="col-md-4 steps steps__1">
                    <h2>Step 2</h2>
                    <p>Once you've entered your postcode you'll be presented with a suburb and the related council.</p>
                </div>

                <div class="col-md-5 steps steps__1">
                    <h2>Step 3</h2>
                    <p>You'll be able to fill in this form once you've provided a postcode and suburb.</p>
                    <form class="form my-2 my-lg-0 step__3--form" method="post" action="{{ route('report.submit') }}">
                        <fieldset class="form-group" disabled>
                            <div class="form-group">
                                <label for="problemTitle">Title</label>
                                <input type="text" class="form-control" id="problemTitle" aria-describedby="titleHelp" placeholder="Title">
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
                                <input type="text" class="form-control" id="problemName" aria-describedby="emailHelp" placeholder="Your Name">
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
