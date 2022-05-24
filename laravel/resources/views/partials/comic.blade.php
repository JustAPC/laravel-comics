@extends('layouts.layout')

@section('title', 'Comic')

@section('content')
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

    <section class="comic-infos bg-white">
        <div class="container">
            <div class="px-5 border">
                <div class="ps-5 d-flex justify-content-between">
                    <div class="flex-grow-1">
                        <h3 class="comic-title">{{ $singleComic['title'] }}</h3>
                        <div class="d-flex">
                            <div class="w-75 text-primary border">
                                ciao
                            </div>

                            <div class="w-25 text-primary border">
                                ciao
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href=""><img src="{{ asset('images/adv.jpg') }}" alt=""></a>
                    </div>

                </div>

            </div>
        </div>
    </section>


@endsection
