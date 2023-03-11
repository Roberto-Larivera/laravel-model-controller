<?php

/*
per creare un controller:
`php artisan make:controller Guest/NomeController`


in web la Route diventa cosi:

`Route::get('/', [MainController::class, 'index']);`
*/
namespace App\Http\Controllers\Guest;

//si specifca use di Controller perchè non fa parte della stessa cartella
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models

// si importa il Model che fa riferimento al nostro db
use App\Models\Movie;

class MainController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
         //dd($movies);



         /*
            ### Array di dati

            Possiamo ovviamente passare anche dei dati che ci serviranno nella view in diversi modi.

            1. Creare un array associativo che contiene tutti i dati da passare alla view e passarlo come secondo parametro dopo il path della view.

            - In questo modo, nella view saranno disponibili delle variabili che avranno come nome le chiavi dell'array.

            ### Compact

            2.  Usare il metodo compact passandogli come argomento il nome di una variabile precedentemente creata, senza il simbolo $!

            - In questo modo, nella view sarà disponibile una variabile con lo stesso nome della variabile passata nel metodo compact.

            - La variabile potrà contenere anche un array.
         */
        return view('home', compact('movies'));
    }
}
