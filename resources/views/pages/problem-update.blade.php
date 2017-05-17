@extends('layouts.page')

@section('title', 'Fix My Council Home')

@section('content')

    <div class="site__heading">
        <div class="container">
            <h1 class="display-3 hero__title">Problems</h1>
        </div>
    </div>

    <div class="content__container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>@TODO: Note this is a feature that has not been implemented</h4>
                    <h5>The idea was to be able to update the status and add notes to an existing problem.</h5>
                    <p>Choose a problem to be updated:</p>
                    <ul>
                        @foreach ($problems as $problem)
                            <li>
                                {{ $problem->title }} - {{$problem->council->name}} ({{ $problem->suburb->name }})
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
