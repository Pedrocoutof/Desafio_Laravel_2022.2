<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Stock;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsLogged;

Route::middleware(['auth', 'verified'])->group(function () {

        // Produtos
            Route::get('produtos/', [ProductController::class, 'index']);
            Route::get('/produtos/visualizar/', [ProductController::class, 'show']);

            Route::get('produtos/create',
                function (){
                    return view('site.criando-produto');
            })->middleware(IsAdmin::class);;
            Route::post('/produtos/store/', [ProductController::class, 'store'])->middleware(IsAdmin::class);;

            Route::get('/produtos/delete/', [ProductController::class, 'delete'])->middleware(IsAdmin::class);;

            Route::get('/produtos/editar/', [ProductController::class, 'edit'])->middleware(IsAdmin::class);;
            Route::post('/produtos/update/', [ProductController::class, 'update'])->middleware(IsAdmin::class);;

    // Usuarios
            Route::get('/users/', [UserController::class, 'index'])->middleware(IsAdmin::class);
            Route::get('/users/visualizar/', [UserController::class, 'show'])->middleware(IsAdmin::class);;
            Route::get('/users/editar/', [UserController::class, 'edit'])->middleware(IsAdmin::class);;
            Route::post('/users/update/', [UserController::class, 'update'])->middleware(IsAdmin::class);;
            Route::get('/users/delete/', [UserController::class, 'delete'])->middleware(IsAdmin::class);;

    // Estoque
            Route::get('/estoque/', [Stock::class, 'index'])->middleware(IsLogged::class);
            Route::get('/estoque/criando-estoque', [Stock::class, 'create'])->middleware(IsAdmin::class);;
            Route::post('/estoque/store/', [Stock::class, 'store'])->middleware(IsAdmin::class);;
            Route::get('/estoque/visualizar/', [Stock::class, 'show']);
            Route::get('/estoque/editar/', [Stock::class, 'edit'])->middleware(IsAdmin::class);;
            Route::post('/estoque/editar/update/', [Stock::class, 'update'])->middleware(IsAdmin::class);;
            Route::get('estoque/delete/', [Stock::class, 'destroy'])->middleware(IsAdmin::class);;

    Route::get('erro-permissao', function ()
    {
        return view('site.erro-permissao');
    });
    Route::get('/', [ProductController::class, 'index'])/*->middleware('auth')*/;


    Route::get('/dashboard', function () {
        return view('dashboard');
    })/*->middleware(['auth'])*/->name('dashboard');

});


Route::get('/dale', function() {
    return view('dale');
});

require __DIR__.'/auth.php';
