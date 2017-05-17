@extends('layouts.page')

@section('title', 'Fix My Council - Step 1')

@section('content')
  
    <div class="site__heading">
        <div class="container">
            <h1 class="display-3 hero__title">Fix My Council - Step 3</h1>

        </div>
    </div>

    <div class="content__container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page__description">
                    <p>
                        Please fill in the form describing your issue:
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 steps step__3">
                    @if(Session::has('message'))
                        <p class="alert alert-danger">{{ Session::get('message') }}</p>
                    @endif

                    <h2>Step 1</h2>
                    <p>Postcode:</p>
                    <ul>
                        <li>{{ $postcode }}</li>
                    </ul>
                </div>

                <div class="col-md-4 steps steps__3">
                    <h2>Step 2</h2>
                    <p>Suburb and Council:</p>
                    <ul>
                        <li>{{ $suburbName }}</li>
                    </ul>
                </div>

                <div class="col-md-5 steps steps__3">
                    <h2>Step 3</h2>
                    <p>You'll be able to fill in this form once you've provided a postcode and suburb.</p>
                    <form class="form my-2 my-lg-0 step__3--form" method="post" enctype="multipart/form-data" action="{{ route('report.submit') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="suburbId" value="{{ $suburbId }}"/>
                        <input type="hidden" name="councilId" value="{{ $councilId }}"/>
                        <fieldset class="form-group">
                            <div class="form-group">
                                <label for="problemTitle">Title</label>
                                <input type="text" class="form-control" id="problemTitle" name="problemTitle" aria-describedby="titleHelp" placeholder="Title">
                                <small id="titleHelp" class="form-text text-muted">
                                    Give us a brief title of the problem
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="problemDescription">Description</label>
                                <textarea class="form-control" id="problemDescription" name="problemDescription" rows="3" aria-describedby="descriptionHelp"></textarea>
                                <small id="descriptionHelp" class="form-text text-muted">
                                    Describe the problem and any solutions you might want to put forward if possible.
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="problemImage">Image</label>
                                <input type="file" class="form-control-file" id="problemImage" name="problemImage" aria-describedby="imageHelp">
                                <small id="imageHelp" class="form-text text-muted">
                                    Upload an image of the problem.
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="problemName">Name</label>
                                <input type="text" class="form-control" id="problemName" name="problemName" aria-describedby="emailHelp" placeholder="Your Name">
                                <small id="emailHelp" class="form-text text-muted">
                                    Leaving your first name is fine.
                                </small>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-outline-success my-2 my-sm-0 hero__search" type="submit">Submit</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection 
