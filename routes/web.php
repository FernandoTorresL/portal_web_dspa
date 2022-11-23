<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Example: http://localhost:8000/blog
Route::get('blog', function () {
    // Consulta a base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP',       'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel',   'slug' => 'laravel'],
    ];
    return view('blog', ['posts' => $posts]);
});

// Example: http://localhost:8000/blog/plaravel
Route::get('blog/{slug}', function ($slug) {
    // Consulta a base de datos
    $post = $slug;
    return view('post', ['post' => $post]);
});

// Example: http://localhost:8000/buscar?query=Lo_que_estoy_buscando
/* Route::get('buscar', function (Request $request) {
    // Consulta a base de datos
    return $request->all();
}); */

