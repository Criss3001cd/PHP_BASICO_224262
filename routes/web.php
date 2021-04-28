<?php

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
    return view('welcome');
});

Route::get('variables', function(){
    $mensaje=20;
    print_r($mensaje);
    echo "<hr/ >";
    $mensaje= true;
    var_dump($mensaje);
});

Route::get('arreglos', function(){
    $estudiantes =[ 'AN' => 'Ana',
                    'MA' => 'María',
                    'JO' => 'Jorge'];
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
});


Route::get('países', function(){
    $paises=["Colombia" => [
                            "capital" => "Bogotá",
                            "moneda" => "Peso",
                            "poblacion" => 51
                            ],
             "Perú" => [
                            "capital" => "Lima",
                            "moneda" => "Sol",
                            "poblacion" => 32
                            ],
             "Paraguay" =>[
                            "capital" => "Asunción",
                            "moneda" => "Guaraní",
                            "poblacion" => 7
                             ]
            ];


    $suma=0;
    foreach($paises as  $nombre => $pais){
        $suma+= $pais["poblacion"];
    }
    echo "La suma es $suma";
/*
    echo "<pre>";
    print_r($paises["Ecuado"]["poblacion"]);
    echo "</pre>";
    */
});
