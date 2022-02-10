@extends('layouts.app')

@section('main_content')
    <section class="single_comic">
        @include('components.jumbotron')

        {{-- Blue bar with the comic thumb --}}
        <div class="blue_bar">
            <div class="my_container">
                {{-- Comic thumb --}}
                <div class="single_comic_thumb">
                    <img src="{{ $comic_info['thumb'] }}" alt="{{ $comic_info['title'] }}">
                </div>
            </div>
        </div>

        {{-- Comic info (top part) --}}
        <div class="my_container comic_info_top d_flex">
            {{-- Comic availability & description --}}
            <div class="availability_description">
                <h3 class="comic_title">{{ $comic_info['title'] }}</h3>

                {{-- Availavility button --}}
                <div class="d_flex availability_button_container">
                    <div class="availavility_button available right">
                        <span class="light_text">U.S. price:</span> <span class="white_text">{{ $comic_info['price'] }}</span>
                        <span class="light_text availability">AVAILABLE</span>
                    </div>
                    <div class="availavility_button available left">
                        Check Availability
                    </div>
                </div>

                {{-- Comic description --}}
                <p class="comic_descrption">{{ $comic_info['description'] }}</p>
            </div>
            {{-- Adv --}}
            <div class="adv">
                <div>ADVERTISEMENT</div>
                <img src="{{ asset('../images/adv.jpg') }}" alt="">
            </div>
        </div>

        {{-- Comic info (bottom part) --}}
        <div class="comic_info_bottom">
            <div class="my_container d_flex">
                {{-- TALENT --}}
                <div class="talent">
                    <h4 class="comic_subtitle">Talent</h4>

                    <div class="comic_info_line d_flex">
                        <div class="line_title">Art by:</div>
                        <div class="line_tetx">
                            @foreach ($comic_info['artists'] as $artist)
                                <span>{{$artist}} {{$loop->last ? '' : ','}}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="comic_info_line d_flex">
                        <div class="line_title">Written by:</div>
                        <div class="line_tetx">
                            @foreach ($comic_info['writers'] as $writer)
                                <span>{{$writer}} {{$loop->last ? '' : ','}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
    
                {{-- SPECS --}}
                <div class="specs">
                    <h4 class="comic_subtitle">Specs</h4>

                    <div class="comic_info_line d_flex">
                        <div class="line_title">Series:</div>
                        <div class="line_tetx">{{ $comic_info['series'] }}</div>
                    </div>
                    <div class="comic_info_line d_flex">
                        <div class="line_title">U.S. Price:</div>
                        <div class="line_tetx">{{ $comic_info['price'] }}</div>
                    </div>
                    <div class="comic_info_line d_flex">
                        <div class="line_title">On Sale Date:</div>
                        <div class="line_tetx">{{ $comic_info['sale_date'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection