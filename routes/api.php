<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PuntosInteresController;
use App\Http\Controllers\TourArmadoController;
use App\Http\Controllers\TranslationsController;
use App\Http\Controllers\UserProfileController;
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

Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    Route::POST('logout', [AuthController::class, 'logout']);
});

Route::POST('login', [AuthController::class, 'login']);
Route::POST('register', [AuthController::class, 'register']);

Route::POST('refresh', [AuthController::class, 'refresh']);
Route::PATCH('updateEmail/{id}', [AuthController::class, 'userEmailUpdate']);
Route::PATCH('updateName/{id}', [AuthController::class, 'userNameUpdate']);
Route::PATCH('updatePassword/{id}', [AuthController::class, 'userPasswordUpdate']);
Route::POST('deleteUsers', [AuthController::class, 'deleteUsersAfterTesting']);
Route::POST('userGoogleData', [AuthController::class, 'userGoogleData']);

Route::GET('/userProfile/{id}', [UserProfileController::class, 'showUserProfile']);
Route::POST('/userProfile', [UserProfileController::class, 'insertUserProfile']);
Route::PATCH('/userProfile/{id}', [UserProfileController::class, 'updateUserProfile']);
Route::DELETE('/userProfile/{id}', [UserProfileController::class, 'deleteUserProfile']);

Route::GET('/PuntosInteres/nombre/{nombre}', [PuntosInteresController::class, 'ListarPuntosDeInteresPorNombre']); //Sin geolocalizacion
Route::GET('/PuntosInteres/categoria/{categoria}', [PuntosInteresController::class, 'ListarPuntosDeInteresPorCategoria']); //Sin geolocalizacion

Route::POST('/PuntosInteresCercanos/nombre/{nombre}', [PuntosInteresController::class, 'ListarPuntosDeInteresPorNombreCercanos']); //Con geolocalizacion
Route::POST('/PuntosInteresCercanos/categoria/{categoria}', [PuntosInteresController::class, 'ListarPuntosDeInteresPorCategoriaCercanos']); //Con geolocalizacion

Route::POST('/PuntosInteresParaTour', [PuntosInteresController::class, 'ListarPuntosDeInteresParaTour']);

Route::GET('/translations', [TranslationsController::class, 'fetchTranslations']);
Route::POST('/translations', [TranslationsController::class, 'saveTranslations']);

Route::POST('/tourArmado', [TourArmadoController::class, 'InsertarTourArmado']);
Route::GET('/tourArmado/{id}', [TourArmadoController::class, 'ListarToursArmados']);