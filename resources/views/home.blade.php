@extends('layouts.main')

@section('pageTitle')
    Home Page La Molisana | Sito Ufficiale
@endsection

@section('main')
            
    <div class="container-home">

        <div class="container">
    
            {{-- sezione-paste-lunghe --}}
            <section >
                <h2>LE LUNGHE</h2>
                <div class="cards">
                    @foreach ($lunghe as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    </div>
                    @endforeach
                </div>
            </section>
            {{-- /sezione-paste-lunghe --}}
            {{-- sezione-paste-corte --}}
            <section >
                <h2>LE CORTE</h2>
                <div class="cards">
                    @foreach ($corte as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    </div>
                    @endforeach
                </div>
            </section>
            {{-- /sezione-paste-corte --}}
            {{-- sezione-paste-cortissime --}}
            <section >
                <h2>LE CORTISSIME</h2>
                <div class="cards">
                    @foreach ($cortissime as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    </div>
                    @endforeach
                </div>
            </section>
            {{-- /sezione-paste-cortissime --}}
        </div>
    </div>
@endsection