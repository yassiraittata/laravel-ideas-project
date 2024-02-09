<?php

use App\Http\Controllers\DashboardController;
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

// Home page
Route::get('/', [DashboardController::class, "index"]);

Route::get('/terms', function () {
    return view('terms');
});

// // Profile page
// Route::get('/profile', function () {
//     return view('users.profile');
// });

// // Feed page
// Route::get('/feed', function () {
//     return view('feed');
// });
