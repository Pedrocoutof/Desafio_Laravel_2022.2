<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Stock;
use App\Http\Middleware\Autenticador;

Route::middleware(['auth', 'verified'])->group(function () {

        // Produtos
            Route::get('produtos/', [ProductController::class, 'index']);
            Route::get('/produtos/visualizar/', [ProductController::class, 'show']);

            Route::get('produtos/create',
                function (){
                    return view('site.criando-produto');
            });
            Route::post('/produtos/store/', [ProductController::class, 'store']);

            Route::get('/produtos/delete/', [ProductController::class, 'delete']);

            Route::get('/produtos/editar/', [ProductController::class, 'edit']);
            Route::post('/produtos/update/', [ProductController::class, 'update']);

    // Usuarios
            Route::get('/users/', [UserController::class, 'index']);
            Route::get('/users/visualizar/', [UserController::class, 'show']);
            Route::get('/users/editar/', [UserController::class, 'edit']);
            Route::post('/users/update/', [UserController::class, 'update']);
            Route::get('/users/delete/', [UserController::class, 'delete']);

    // Estoque
            Route::get('/estoque/', [Stock::class, 'index']);
            Route::get('/estoque/criando-estoque', [Stock::class, 'create']);
            Route::post('/estoque/store/', [Stock::class, 'store']);
            Route::get('/estoque/visualizar/', [Stock::class, 'show']);
            Route::get('/estoque/editar/', [Stock::class, 'edit']);
            Route::post('/estoque/editar/update/', [Stock::class, 'update']);
            Route::get('estoque/delete/', [Stock::class, 'destroy']);


    Route::get('/', [ProductController::class, 'index'])/*->middleware('auth')*/;


    Route::get('/dashboard', function () {
        return view('dashboard');
    })/*->middleware(['auth'])*/->name('dashboard');

});


Route::get('/dale', function() {
    return view('dale');
});

require __DIR__.'/auth.php';
