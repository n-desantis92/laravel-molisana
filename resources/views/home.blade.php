<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google-font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    {{-- /google-font --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>La Molisana</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('../images/marchio-sito-test.png') }}" alt="">
        </div>
        <nav class="main-nav">
            {{-- menu --}}
            <ul>
                <li class="active"><a href=""#>Home</a></li>
                <li><a href="#">Prodotti</a></li>
                <li><a href="#">News</a></li>
            </ul>
            {{-- /menu --}}
        </nav>
    </header>
    <main>
        <div class="container">
            {{-- sezione-paste-lunghe --}}
            <section >
                <h2>le lunghe</h2>
                <div class="cards">
                    @foreach ($lunghe as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    </div>
                    @endforeach
                </div>
            </section>
            {{-- /sezione-paste-lunghe --}}
        </div>
    </main>

</body>
</html>