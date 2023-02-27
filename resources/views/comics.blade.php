@extends('layout.app')

@section('main-content')
    <div class="jumbotron"></div>
    <section class="current-series">
        <div class="container">
            <div class="row">
                <h4 class="series-title"> CURRENT SERIES </h4>

                @foreach ($comics as $key => $comic)
                    <div class="col-6 col-md-3 col-lg-2">
                        <a href="{{ route('detail_fumetto', $comic['id'] - 1) }}" class="w-100">
                            <div class="my-card">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid">
                                <p class="text-white">
                                    {{ $comic['title']}}
                                   <p id="prezzo">{{ $comic['price']}}€</p>
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
            <a class='but-load' href="#"> LOAD MORE </a>
        </div>
    </section>
@endsection
