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
    <title>@yield('pageTitle')</title>
</head>
<body>
    @include('parts.header')
    <main>
        @yield('main')
    </main>    
    @include('parts.footer')

</body>
</html>