<?php

use App\Http\Controllers\Frontsite\LandingPageController;
use App\Http\Controllers\Frontsite\PaymentController;
use App\Models\Operational\Appointment;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/', LandingPageController::class);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
        // appointment page 
    Route::resource('appointment', Appointment::class);
        // payment page
    Route::resource('payment', PaymentController::class);
});

Route::group(['backsite' => 'backsite', 'as' => 'backsite', 'middleware' => ['auth:sanctum', 'verified']], function(){

        return view('dashboard');
        

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


