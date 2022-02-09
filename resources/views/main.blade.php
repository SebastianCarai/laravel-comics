@extends('layouts.app')

{{-- Page title --}}
@section('page_title')
    Products
@endsection

{{-- Main --}}
@section('main_content')
    {{-- BANNER --}}
    <section class="banner">
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="">
    </section>

    {{-- COMICS LIST --}}
    <div class="comics_container">
        <div class="my_container">
            {{-- Current series --}}
            <div class="blue_btn">
                CURRENT SERIES
            </div>

            {{-- COMICS --}}
            <div class="cards_container">
                @include('components.comics')
            </div>
            {{-- END COMICS --}}

            {{-- Load more btn --}}
            <div class="load_more">
                <div class="blue_btn">
                    LOAD MORE
                </div>
            </div>
        </div>
    </div>  

    {{-- BLUE BANNER --}}
    <div class="blue_banner">
        <div class="my_container d_flex">
            {{-- Single banner card --}}
            <div class="banner_card">
                <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                <span>
                    DIGITAL COMICS
                </span>
            </div>
            {{-- End single banner card --}}
            {{-- Single banner card --}}
            <div class="banner_card">
                <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                <span>
                    DC MERCHANDISE
                </span>
            </div>
            {{-- End single banner card --}}
            {{-- Single banner card --}}
            <div class="banner_card">
                <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                <span>
                    SUBSCRIPTIONS
                </span>
            </div>
            {{-- End single banner card --}}
            {{-- Single banner card --}}
            <div class="banner_card">
                <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                <span>
                    COMIC SHOP LOCATOR
                </span>
            </div>
            {{-- End single banner card --}}
            {{-- Single banner card --}}
            <div class="banner_card">
                <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                <span>
                    DC POWER VISA
                </span>
            </div>
            {{-- End single banner card --}}
        </div>
    </div>
@endsection