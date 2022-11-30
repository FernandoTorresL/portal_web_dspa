<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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
    // Route::get('blog',          'blog')->name('blog');
    Route::get('blog/{post:slug}',  'post')->name('post');
});

Route::redirect('dashboard', 'posts')->name('dashboard');

Route::resource('posts', PostController::class)->middleware(['auth', 'verified'])->except(['show']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
