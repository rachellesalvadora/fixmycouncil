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
                    <p>Here is a list of the latest problems submitted:</p>
                    <ul>
                        @foreach ($problems as $problem)
                            <li>
                                <a href="{{ route('problem.view', $problem->id) }}">
                                {{ $problem->title }} - {{$problem->council->name}} ({{ $problem->suburb->name }})
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
