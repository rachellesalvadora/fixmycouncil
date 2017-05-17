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
                    <p>Click on a council or suburb to view contact information and any problems that have been submitted.</p>
                    <ul>
                        @foreach ($councils as $council)
                            <li>
                                <a href="{{ route('council.info', $council->id) }}">
                                {{ $council->name }}
                                    @if ($council->problems->count() >= 1) 
                                        <strong>({{ $council->problems->count() }} problems reported)</strong>
                                    @else
                                        <strong>(0 problems reported)</strong>
                                    @endif
                                </a>
                                <ul>
                                    @foreach($council->suburbs as $suburb)
                                        <li>{{ $suburb->name }}</li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
