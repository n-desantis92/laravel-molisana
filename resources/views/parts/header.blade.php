    <header>
        <div class="logo">
            <img src="{{ asset('../images/marchio-sito-test.png') }}" alt="la-molisana">
        </div>
        <nav class="main-nav">
            {{-- menu --}}
            <ul>
                <li class="active"><a href="{{route('homepage')}}">Home</a></li>
                <li><a href="{{route('prodotto')}}">Prodotti</a></li>
                <li><a href="{{route('news')}}">News</a></li>
            </ul>
            {{-- /menu --}}
        </nav>
    </header>