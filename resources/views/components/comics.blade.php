<div class="comics d_flex">
    @foreach ($comics as $comic)
        {{-- SINGLE CARD --}}
        <div class="single_card">
            <a href="{{ route('comic', ['id'=>$comic['id']]) }}">
                <div class="card_img">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>
                <div class="comic_text">
                    {{ $comic['series'] }}
                </div>
            </a>
        </div>
        {{-- END SINGLE CARD --}}
    @endforeach
</div>