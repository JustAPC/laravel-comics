@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <div class="jumbo-img position-relative">
        <span id="current-series">CURRENT SERIES</span>
    </div>

    <div class="container">
        <ul class="pt-5 d-flex flex-wrap justify-content-between">
            @foreach ($comics as $item)
                <li class="col-2 pb-4">
                    <div class="card-bg" style="background-image: url('{{ asset($item['thumb']) }}')">
                    </div>
                    <p class="pt-3 description">{{ $item['series'] }}</p>
                </li>
            @endforeach
        </ul>

        <a href="#" class="d-flex justify-content-center pb-4">
            <span id="load-more-button">LOAD MORE</span>
        </a>
    </div>
@endsection
