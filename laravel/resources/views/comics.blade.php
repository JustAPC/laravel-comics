@extends('layouts.layout')

@section('title', 'Comics')

@section('content')
    <div class="jumbo-img position-relative">
        <span id="current-series">CURRENT SERIES</span>
    </div>

    <div class="container">
        <ul class="pt-5 d-flex flex-wrap justify-content-between">
            @foreach ($comicsList as $key => $item)
                <li class="col-2 pb-4">
                    <a href="{{ route('comic', ['id' => $key]) }}">
                        <div class="card-bg" style="background-image: url('{{ asset($item['thumb']) }}')">
                        </div>
                        <p class="pt-3 description">{{ $item['series'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>

        <a href="#" class="d-flex justify-content-center pb-4">
            <span id="load-more-button">LOAD MORE</span>
        </a>
    </div>
    <section>
        <div class="banner-container">
            <div class="container">
                <ul class="py-5 d-flex justify-content-between align-items-center">
                    <li><a href="#">
                            <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                            <span class="text-uppercase">Digital Comics</span>
                        </a>
                    </li>
                    <li><a href="#">
                            <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                            <span class="text-uppercase">DC Merchandise</span>
                        </a>
                    </li>
                    <li><a href="#">
                            <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                            <span class="text-uppercase">Subscription</span>
                        </a>
                    </li>
                    <li><a href="#">
                            <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="" style="width: 30px">
                            <span class="text-uppercase me-5">Comic Shop Locator</span>
                        </a>
                    </li>
                    <li><a href="#">
                            <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="" style="height: 50px">
                            <span class="text-uppercase">DC Power Visa</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
