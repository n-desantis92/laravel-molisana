@extends('layouts.main')

@section('fontawesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection

@section('pageTitle')
    Prodotto
@endsection

@section('main')

    <div class="product">
        <div class="container">

            <h1>{{$pasta['titolo']}}</h1>
            <img src="{{$pasta['src-h']}}" alt="">
            <img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
            <p>
                {!!$pasta['descrizione']!!}
            </p>
        </div>
    </div>
@endsection