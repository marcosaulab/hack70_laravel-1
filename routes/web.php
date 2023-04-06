<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ! esiste una ROTTA che risponde ad una richiesta di tipo GET con uri /


// Route::get('/', function () {
//     // ! entra nella cartella resources/views e cerca un file di nome welcome
//     return view('welcome');
// });


Route::get('/', function () {
    $ricette = ["Carbonara", "Agnello al forno", "Pasta con le vongole"];
    $categorie = ["Primi", "Secondi", "Contorni"];
    // come parametro da passare alla vista creo un array chiave-valore
    // in cui la chiave è il nome della variabile che voglio passare alla vista (view)
    // mentre il valore è il dato che voglio passare
    return view('welcome', ['ricette' => $ricette, 'categorie' => $categorie]);
});


// ! esiste una ROTTA che risponde ad una richiesta di tipo GET con uri /chi-siamo

Route::get('/chi-siamo', function(){
    $persone = [
        [
            "name" => "Andrea", 
            "skill" => "Cucina la pasta", 
            "age" => 34, 
        ],
        [
            "name" => "Davide",
            "skill" => "Sa fare i secondi",
            "age" => 21,
        ],
        [
            "name" => "Serena",
            "skill" => "Sa fare i dolci",
            "age" => 28,
        ],
        [
            "name" => "Anna",
            "skill" => "Sa fare le pizze",
            "age" => 50,
        ],
    ];
    // ! entra nella cartella resources/views e cerca un file di nome chisiamo
    return view('chisiamo', ['team' => $persone]);
});