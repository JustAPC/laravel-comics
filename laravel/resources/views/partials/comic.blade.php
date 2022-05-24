@extends('layouts.layout')

@section('title', 'Comic')

@section('content')
    {{-- Sezione Preview Fumetto --}}
    <section>
        <div class="jumbo-img"></div>
        <a href="">
            <div class="comic-preview position-relative">
                <div class="comic-card position-absolute">
                    <div class="position-absolute comic-book">COMIC BOOK</div>
                    <img src="{{ asset($singleComic['thumb']) }}" alt="" class="comic-img">
                    <div class="view-gallery text-center">VIEW GALLERY</div>
                </div>
            </div>
        </a>
    </section>

    {{-- Sezione Acquisto Fumetto --}}
    <section class="bg-white pt-4">

        <div class="col-7 pb-5 mx-auto d-flex justify-content-between">
            <div class="flex-grow-1">
                <h3 class="comic-title text-uppercase">{{ $singleComic['title'] }}</h3>

                <div class="d-flex info-container">
                    <div class="info-section">
                        <div>
                            <span class="price-text">U.S. Price:</span>
                            <span class="text-white p-0">{{ $singleComic['price'] }}</span>
                        </div>

                        <div class="price-text pe-4">AVAILABLE</div>
                    </div>

                    <div class="info-section2">Check Availability </div>
                </div>

                <p class="text-secondary pt-4">{{ $singleComic['description'] }}</p>
            </div>

            <div class="pt-4">
                <p class="text-secondary text-end fw-bold">ADVERTISMENT</p>
                <a href="" class="ps-5">
                    <img src="{{ asset('images/funziona-maledetto.jpg') }}" alt="">
                </a>
            </div>
        </div>

    </section>

    {{-- Sezione Descrizione Fumetto --}}
    <section class="bordertop pb-5">

        <div class="col-7 mx-auto pb-5">
            <div class="d-flex justify-content-between">
                <div class="col-5">
                    <h5 class="comic-title pb-3">Talent</h5>

                    <div>
                        <div class="d-flex desc-container1">
                            <div class="talent-title flex-grow-1">Art by:</div>
                            <div class="artists-container">
                                @foreach ($singleComic['artists'] as $elm)
                                    <a href="#" class="artist-text">{{ $elm }},</a>
                                @endforeach
                            </div>
                        </div>

                        <div class="d-flex desc-container2">
                            <div class="talent-title flex-grow-1">Written by:</div>
                            <div class="artists-container">
                                @foreach ($singleComic['writers'] as $elm)
                                    <a href="#" class="artist-text">{{ $elm }},</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <h5 class="comic-title pb-3">Specs</h5>

                    <div>
                        <div class="d-flex desc-container1">
                            <div class="talent-title flex-grow-1">Series:</div>
                            <div class="artists-container">
                                <a href="" class="artist-text text-uppercase">
                                    {{ $singleComic['series'] }}
                                </a>
                            </div>
                        </div>

                        <div class="d-flex desc-container2">
                            <div class="talent-title flex-grow-1">U.S. Price:</div>
                            <div class="artists-container text-dark" style="font-size: 0.8em">
                                {{ $singleComic['price'] }}
                            </div>
                        </div>

                        <div class="d-flex desc-container2">
                            <div class="talent-title flex-grow-1">On Sale Date:</div>
                            <div class="artists-container text-dark" style="font-size: 0.8em">
                                {{ $singleComic['sale_date'] }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- Sezione Merchandising --}}
    <section class="bordertop">
        <div class="col-7 mx-auto">
            <div class="merch-box">
                <div class="col-3 p-3 d-flex justify-content-between merch-container">
                    <p class="merch-text">digital comics</p>
                    <img src="{{ asset('images/DigitalComics.png') }}" alt="">
                </div>
                <div class="col-3 p-3 d-flex justify-content-between merch-container">
                    <p class="merch-text">shop dc</p>
                    <img src="{{ asset('images/ShopDC.png') }}" alt="">
                </div>
                <div class="col-3 p-3 d-flex justify-content-between merch-container">
                    <p class="merch-text">comic shop locator</p>
                    <img src="{{ asset('images/ComicShopLocator.png') }}" alt="">
                </div>
                <div class="col-3 p-3 d-flex justify-content-between merch-container">
                    <p class="merch-text">subscriptions</p>
                    <img src="{{ asset('images/Subscription.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
