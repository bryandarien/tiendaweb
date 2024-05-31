<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', [ProductoController::class, 'home'])->name('index');

Route::get('/productos', [ProductoController::class, 'store'])->name('productos');
Route::post('/productos/search',[ProductoController::class, 'searchProduct'])->name('productos.search');
Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('productos.show');

Route::get('/admin',function(){
    return view('admin.index');
})->middleware('can:admin.home')->name('admin.home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
