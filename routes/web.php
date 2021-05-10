<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = config('paste');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach($data as $key => $pasta) {

        $pasta['id'] = $key;

        if($pasta['tipo'] == 'lunga') {
            $lunga[] = $pasta;
        } elseif($pasta['tipo'] == 'corta') {
            $corta[] = $pasta;
        } elseif($pasta['tipo'] == 'cortissima') {
            $cortissima[] = $pasta;
        }
    }

    return view('home', [
        'corte' => $corta,
        'lunghe' => $lunga,
        'cortissime' => $cortissima,
    ]);
})->name('homepage');

Route::get('/ultime-notizie', function() {
    return view('news');
})->name('news');

Route::get('/prodotto/{id}', function ($id) {
    $data = config('paste');

    if ( $id >= count($data)){
        abort(404);
    };
    $pasta = $data[$id];
    
    $next = ($id == (count($data) - 1) ) ? 0 : $id + 1;
    $prev = ($id == 0) ? (count($data) - 1) : $id - 1;

    return view('prodotto', [
        'pasta' => $pasta,
        'next' => $next,
        'prev' => $prev
    ]);
})->where('id', '[0-9]+')->name('prodotto');
