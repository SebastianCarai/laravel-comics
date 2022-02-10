<header>
    <div class="header_top">
        <div class="my_container">
            Dc power visa
        </div>
    </div>
    <div class="header_bottom">
        <div class="my_container d_flex">
            <div>
                <img src="{{ asset('images/dc-logo.png') }}" class="dc_header_logo" alt="DC Logo">
            </div>
            <div>
                <ul class="d_flex">
                    <li>
                        <a href="{{route('characters')}}" class="{{Request::route()->getName() === 'characters' ? 'active' : ''}}">CHARACTERS</a>
                    </li>
                    <li>
                        <a href="{{route('comics')}}" class="{{Request::route()->getName() === 'comics' ? 'active' : ''}}">COMICS</a>
                    </li>
                    <li>
                        <a href="#" class="{{Request::route()->getName() === 'movies' ? 'active' : ''}}">MOVIES</a>
                    </li>
                    <li>
                        <a href="#" class="{{Request::route()->getName() === 'tv' ? 'active' : ''}}">TV</a>
                    </li>
                    <li>
                        <a href="#" class="{{Request::route()->getName() === 'games' ? 'active' : ''}}">GAMES</a>
                    </li>
                    <li>
                        <a href="#" class="{{Request::route()->getName() === 'collectibles' ? 'active' : ''}}">COLLECTIBLES</a>
                    </li>
                    <li>
                        <a href="#" class="{{Request::route()->getName() === 'videos' ? 'active' : ''}}">VIDEOS</a>
                    </li>
                    <li>
                        <a href="#" class="{{Request::route()->getName() === 'fans' ? 'active' : ''}}">FANS</a>
                    </li>
                    <li>
                        <a href="# class="{{Request::route()->getName() === 'news' ? 'active' : ''}}">NEWS</a>
                    </li>
                    <li>
                        <a href="#">SHOP</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>