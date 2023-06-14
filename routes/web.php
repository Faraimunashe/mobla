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
    return redirect()->route('login');
});

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->middleware(['auth'])->name('dashboard');
Route::post('/nearest-service', 'App\Http\Controllers\admin\EmergencyController@index')->middleware(['auth'])->name('nearest-service');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/admin/dashboard', 'App\Http\Controllers\admin\DashboardController@index')->name('admin-dashboard');
    Route::post('/admin/add-actictivity', 'App\Http\Controllers\admin\DashboardController@add_activity')->name('admin-add-activity');

    Route::get('/admin/places', 'App\Http\Controllers\user\PlacesController@index')->name('admin-places');
    Route::get('/admin/place/{id}', 'App\Http\Controllers\admin\PlaceController@index')->name('admin-place');
    Route::post('/admin/add-places', 'App\Http\Controllers\user\PlacesController@add')->name('admin-add-places');
    Route::post('/admin/delete-place', 'App\Http\Controllers\user\PlacesController@delete')->name('admin-delete-place');
    Route::post('/admin/add-transport', 'App\Http\Controllers\admin\DashboardController@add_transport')->name('admin-add-transport');

});

Route::group(['middleware' => ['auth', 'role:user']], function(){
    Route::get('/user/dashboard', 'App\Http\Controllers\user\DashboardController@index')->name('user-dashboard');
    Route::post('/user/dashboard', 'App\Http\Controllers\user\DashboardController@index')->name('user-dashboard');

    Route::get('/user/place/{id}', 'App\Http\Controllers\user\PlaceController@index')->name('user-place');
});




require __DIR__.'/auth.php';
