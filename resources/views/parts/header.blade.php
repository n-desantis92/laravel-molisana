    <header>
        <div class="logo">
            <img src="{{ asset('../images/marchio-sito-test.png') }}" alt="la-molisana">
        </div>
        <nav class="main-nav">
            {{-- menu --}}
            <ul>
                <li class="{{Route::getCurrentRoute()->getName() == 'homepage' ? 'active' : ''}}"><a href="{{route('homepage')}}">Home</a></li>
                <li class="{{Route::getCurrentRoute()->getName() == 'prodotto' ? 'active' : ''}}"><a href="{{route('prodotto', ['id' => 0])}}">Prodotti</a></li>
                <li class="{{Route::getCurrentRoute()->getName() == 'news' ? 'active' : ''}}"><a href="{{route('news')}}">News</a></li>
            </ul>
            {{-- /menu --}}
        </nav>
    </header>