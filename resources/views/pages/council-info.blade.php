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
                    <h2>{{ $council->name }}</h2>
                    <ul>
                        <li>
                            Address: {{ $council->address }} <br>
                            {{ $council->postcode }}, {{ $council->suburb_town }}
                        </li>
                        <li>
                            Phone: <a href="tel:{{ $council->phone }}">{{ $council->phone }}</a>
                        </li>
                        <li>
                            Fax: <a href="fax:{{ $council->fax }}">{{ $council->fax }}</a>
                        </li>
                        <li>
                            Email: <a href="mailto:{{ $council->email }}">{{ $council->email }}</a>
                        </li>
                        <li>
                            Website: <a href="{{ $council->website }}" target="_blank">{{ $council->website }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
