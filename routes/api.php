<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Checkouts\CheckoutController;
use App\Http\Controllers\API\Kuliah\KuliahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//user
Route::post('/register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Route::group(['prefix' => 'checkouts'], function () {
//     Route::group(['middleware' => 'auth:api'], function () {
//         Route::get('checkouts', [CheckoutController::class, 'index']);
//         Route::post('checkout/add', [CheckoutController::class, 'add']);
//         Route::post('checkout/update', [CheckoutController::class, 'update']);
//         Route::post('checkout/delete', [CheckoutController::class, 'destroy']);
//     Route::group(['middleware' => 'auth:api'], function () {
// });

// Route::group(['prefix' => 'checkouts'], function () {
//     Route::group(['middleware' => 'auth:api'], function () {
//         Route::get('checkouts', [CheckoutController::class, 'index']);
//         Route::post('checkout/add', [CheckoutController::class, 'add']);
//         Route::put('checkout/update{id}', [CheckoutController::class, 'update']);
//         Route::delete('checkout/delete{id}', [CheckoutController::class, 'destroy']);
//     });
// });

Route::group(['prefix' => 'maha'], function () {
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('kuliahs', [KuliahController::class, 'index']);
        Route::post('kuliah/add', [KuliahController::class, 'add']);
        // Route::put('kuliah/update/{id}', [KuliahController::class, 'update']);
        Route::delete('kuliah/destroy/{id}', [KuliahController::class, 'destroy']);
    });
});
