<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth', 'role:user']], function(){
    Route::get('/user/dashboard', 'App\Http\Controllers\user\DashboardController@index')->name('user-dashboard');

    Route::get('/user/places', 'App\Http\Controllers\user\PlacesController@index')->name('user-places');
    Route::post('/user/add-places', 'App\Http\Controllers\user\PlacesController@add')->name('user-add-places');

    Route::get('/user/public-transport', 'App\Http\Controllers\user\TransportController@index')->name('user-transport');

    Route::get('/user/emergency-services', 'App\Http\Controllers\user\EmergencyController@index')->name('user-emergency');

    Route::get('/nearest-hospital', 'App\Http\Controllers\MapController@nearestHospital')->name('user-hospital');

    Route::get('/nearest-police', 'App\Http\Controllers\MapController@nearestPolice')->name('user-police');

    Route::get('/nearest-airport', 'App\Http\Controllers\MapController@nearestAirport')->name('user-airport');

    Route::get('/nearest-railway', 'App\Http\Controllers\MapController@nearestRailway')->name('user-railway');
});




require __DIR__.'/auth.php';
