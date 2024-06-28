<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ElectronicComponentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\password;

/*Route::get('/', function () {
    return view('welcome');
});*/

// WELCOME
Route::get('/', [HomeController::class, 'index']);

// ACCOUNT
Route::get('/account/login', [AccountController::class, 'sign_in']);
Route::post('/account/login', [AccountController::class, 'sign_in_verify']);
Route::get('/account/register', [AccountController::class, 'sign_up']);
Route::post('/account/register', [AccountController::class, 'sign_up_data']);

// PRODUCT
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
Route::put('/products/{product}', [ProductController::class, 'update']);
Route::delete('/products/{product}', [ProductController::class, 'destroy']);

// electronic-components
Route::get('/electronic-components/collections', [ElectronicComponentsController::class, 'index']);









Route::get('prueba', function(){

    $user = User::all();
    //$user = User::where('password', '1234');
    //$contrasenia = $user->password;

    if (true) {
        # code...
    }
    return $user;
});