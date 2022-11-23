<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Example: http://localhost:8000
Route::get('/', function () {
    return 'Ruta home';
});

// Example: http://localhost:8000/blog
Route::get('blog', function () {
    return 'Listado de publicaciones';
});

// Example: http://localhost:8000/blog/plaravel
Route::get('blog/{slug}', function ($slug) {
    // Consulta a base de datos
    return $slug;
});

// Example: http://localhost:8000/buscar?query=Lo_que_estoy_buscando
Route::get('buscar', function (Request $request) {
    // Consulta a base de datos
    return $request->all();
});
