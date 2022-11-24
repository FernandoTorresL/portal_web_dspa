<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Example: http://localhost:8000/buscar?query=Lo_que_estoy_buscando
/* Route::get('buscar', function (Request $request) {
    // Consulta a base de datos
    return $request->all();
}); */

// Routes usando PageController en cada línea:
/*
Route::get('/',             [PageController::class,   'home'])->name('home');
Route::get('blog',          [PageController::class,   'blog'])->name('blog');
Route::get('blog/{slug}',   [PageController::class,   'post'])->name('post');
*/

// Para no repetir el controlador, se incluyen en un grupo:
Route::controller(PageController::class)->group(function () {
    Route::get('/',             'home')->name('home');
    Route::get('blog',          'blog')->name('blog');
    Route::get('blog/{slug}',   'post')->name('post');
});
