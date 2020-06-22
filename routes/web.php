<?php

use App\Categoria;
use App\Http\Controllers\categoriasController;
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


/*
|
| Ruta de prueba
|
|
*/ 

function creacion($y){
    
}

Route::get('prueba', function(){

    $estudiantes=[

        "brayhan",
        "daniela",
        "rojas"

    ];

    echo"<pre>";
    var_dump($estudiantes);
    echo "</pre>";
});


Route::get('paises', function(){

    $paises=[ 
        
        "Colombia" => [
                "capital" => "bogota",
                "moneda" => "peso",
                "poblacion" => 55,
                "principal" => ["Cali","Medellin","Barranquilla"]   
            ],
        "Ecuador" => [
                "capital" => "Quito",
                "moneda" => "dolar",
                "poblacion" => 10,
                "principal" => ["manta","pichina","guayaquil"]   
            ],
        "Peru" => [
                "capital" => "Brazilia",
                "moneda" => "real",
                "poblacion" => 55,
                "principal" => ["santos","san pablo","bahia"]   
            ]
    ];

    //pasar el arreglo de paises a una vista

    return view("paises")->with("paises",$paises);

});

Route::get("categorias","categoriasController@index");
Route::get("categorias/add","categoriasController@create");
Route::post("categorias/store","categoriasController@store");
//cambiar el nombr a la categoria
Route::get("categorias/edit/{idcategoria}","categoriasController@edit");
Route::post("categorias/update/{idcategoria}","categoriasController@update");