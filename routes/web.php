<?php

use Illuminate\Support\Facades\Route;

//bisogna importare il controller
//si inserisce l'alias se la classe già esiste con lo stesso nome
use App\http\Controllers\Guest\MainController as MainController;

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

/*
per creare un controller:
`php artisan make:controller Guest/NomeController`


in web la Route diventa cosi:

`Route::get('/', [MainController::class, 'index']);`
    |
    |
    |
    qui sotto
*/


// dopo '/' soi inseriscew un array con il controller da utilizzare e , con il nome della funzione
Route::get('/', [MainController::class, 'index']);

Route::get('/welcome', function () {
    return view('welcome');
});
