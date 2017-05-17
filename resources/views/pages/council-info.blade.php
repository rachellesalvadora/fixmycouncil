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
                <div class="col-md-4">
                    <h2>{{ $council->name }}</h2>
                    <ul>
                        <li>
                            Address: {{ $council->address }} <br>
                            {{ $council->postcode }}, {{ $council->suburb_town }}, Victoria
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
                            Website: <a href="http://{{ $council->website }}" target="_blank">{{ $council->website }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                <span id="address"> {{ $council->address }}, {{ $council->suburb_town }}, {{ $council->postcode }}, Victoria </span>
                    <iframe id="map" width="100%" height="350"></iframe>
                    <script  type="text/javascript">
                    jQuery(
                      function($)
                      {
                           var q=encodeURIComponent($('#address').text());
                           $('#map')
                            .attr('src',
                                 'https://www.google.com/maps/embed/v1/place?key=AIzaSyDMcn-NKQY73q8vBExi2zQd7lpv9gzmRfQ&q='+q);
                      }
                    );
                    </script>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <h4>Problems</h4>
                    @if ($council->problems->count() > 1)
                        @foreach($council->problems as $problem)
                            <ul>
                                <li><h5>{{ $problem->title}}</h5></li>
                                <ul>
                                    <li>{{ $problem->description }}</li>
                                    <li>Submitted by: {{ $problem->person_name }}</li>
                                </ul>
                            </ul>
                        @endforeach
                    @else
                        <p>No problems submitted yet for this council!
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection
