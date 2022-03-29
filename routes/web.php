<?php

use Hamcrest\Type\IsNumeric;
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
    $fumetti = config('fumetti');
    return view('home', ['fumetti' => $fumetti]);
});

Route::get('/fumetto/{fumetto_id}', function($fumetto_id){

    $fumetti = config('fumetti');
    
    if(is_numeric($fumetto_id) && $fumetto_id >= 0 && $fumetto_id < count($fumetti)){
        $infoFumetto = $fumetti[$fumetto_id];
        return view('fumetto', ['info' => $infoFumetto]);
    }else{
        abort(404, 'ERRORE');
    }
});
