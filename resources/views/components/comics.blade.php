<div class="comics d_flex">
    @foreach ($comics as $comic)
        {{-- SINGLE CARD --}}
        <div class="single_card">
            <div class="card_img">
                <img src="{{ $comic['thumb'] }}" alt="">
            </div>
            <div class="comic_text">
                {{ $comic['series'] }}
            </div>
        </div>
        {{-- END SINGLE CARD --}}
    @endforeach
</div>