@extends('layouts.page')

@section('title', 'Fix My Council Home')

@section('content')

    <div class="site__heading">
        <div class="container">
            <h1 class="display-3 hero__title">Councils</h1>
        </div>
    </div>

    <div class="content__container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Councils</h2>
                    <ul>
                        @foreach ($councils as $council)
                            <li>
                                <a href="{{ route('council.info', $council->id) }}">
                                {{ $council->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
