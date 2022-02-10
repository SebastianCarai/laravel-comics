@extends('layouts.app')

@section('main_content')
    <section class="single_comic">
        @include('components.jumbotron')

        {{-- Blue bar with the comic thumb --}}
        <div class="blue_bar">
            <div class="my_container">
                {{-- Comic thumb --}}
                <div class="single_comic_thumb">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                </div>
            </div>
        </div>

        {{-- Comic info (top part) --}}
        <div class="my_container comic_info_top d_flex">
            {{-- Comic availability & description --}}
            <div class="availability_description">
                <h3 class="comic_title">Action Comics #1000: The Deluxe Edition</h3>

                {{-- Availavility button --}}
                <div class="d_flex availability_button_container">
                    <div class="availavility_button available right">
                        <span class="light_text">U.S. price:</span> <span class="white_text">$19.99</span>
                        <span class="light_text availability">AVAILABLE</span>
                    </div>
                    <div class="availavility_button available left">
                        Check Availability
                    </div>
                </div>

                {{-- Comic description --}}
                <p class="comic_descrption">
                    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
                </p>
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
                        <div class="line_tetx">Ciao</div>
                    </div>
                    <div class="comic_info_line d_flex">
                        <div class="line_title">Written by:</div>
                        <div class="line_tetx">Ciao</div>
                    </div>
                </div>
    
                {{-- SPECS --}}
                <div class="specs">
                    <h4 class="comic_subtitle">Talent</h4>

                    <div class="comic_info_line d_flex">
                        <div class="line_title">Series:</div>
                        <div class="line_tetx">Ciao</div>
                    </div>
                    <div class="comic_info_line d_flex">
                        <div class="line_title">U.S. Price:</div>
                        <div class="line_tetx">Ciao</div>
                    </div>
                    <div class="comic_info_line d_flex">
                        <div class="line_title">On Sale Date:</div>
                        <div class="line_tetx">ciao</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection