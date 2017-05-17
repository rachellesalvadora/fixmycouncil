@extends('layouts.page')

@section('title', 'Fix My Council Home')

@section('content')

    <div class="site__heading">
        <div class="container">
            <h1 class="display-3 hero__title">Problem</h1>
        </div>
    </div>

    <div class="content__container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $problem->title }}</h2>
                    <ul>
                        <li>
                            <img width="200" height="200" src="{{ $problemImage }}"/>
                        </li>
                        <li>
                            {{ $problem->description}}
                        </li>
                        <li>
                            Submitted by: {{ $problem->person_name }}
                        </li>
                        <li>
                            Submitted: {{ $problem->created_at }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
