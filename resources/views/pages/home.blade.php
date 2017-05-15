@extends('layouts.page')

@section('title', 'Fix My Council Home')

@section('content')

    <div class="site__heading">
        <div class="container">
            <h1 class="display-3 hero__title">Fix My Council</h1>
        </div>
    </div>

    <div class="homepage__intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="hero__description">
                        <em>The place to report and view any local problems in Victorian Councils!</em>
                    </p>
                    <p>
                        You can keep track of the progress of any issues and also update issues other people have submitted!
                    </p>
                    <p class="hero__description count">
                        We have so far had 3,000 problems submitted! <br>
                        ~1400 problems have been resolved. <br>
                        ~800 problems are pending. <br>
                    </p>
                    <p>
                        <a href="{{ route('view.problem') }}">Click here</a> to look up your council and see what problems have been submitted!
                    </p>
                </div>

                <div class="col-md-6">
                    <p class="main__description">
                        Fix My Council allows you to submit problems/issues that you are having in your area, such as:
                        <ul>
                            <li>potholes</li>
                            <li>vandalism</li>
                            <li>rubbish</li>
                            <li>broken street lights</li>
                            <li>unsafe buildings</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="homepage__steps">
        <hr>
        <div class="container">
            <div class="row steps__description">
                <div class="col-md-12 steps__caption">
                    <p>In 3 simple steps you can help to improve your Council!</p>
                </div>

                <div class="col-md-4">
                    <h2>Step 1</h2>
                    <p>Enter your postcode.</p>
                </div>

                <div class="col-md-4">
                    <h2>Step 2</h2>
                    <p>Choose your Suburb and Council</p>
                </div>

                <div class="col-md-4">
                    <h2>Step 3</h2>
                    <p>Submit the issue</p>
                </div>
            </div>

            <div class="row steps__button">
                <div class="col-md-12">
                    <a href="{{ route('report.step1') }}">
                        <button type="button" class="btn btn-primary">Get Started Now</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection 
