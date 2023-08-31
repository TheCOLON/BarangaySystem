<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
//     return view('landingpage.landing');
// });
// Route::get('/', [LandingController::class, 'landing']);

Route::get('/', [PostController::class, 'landing']);
Route::get('/about', [PostController::class, 'about']);
Route::get('/ordinance', [PostController::class, 'ordinance']);
Route::get('/accomplishment', [PostController::class, 'accomplishment']);
Route::get('/login', [PostController::class, 'login']);
Route::get('/forms', [PostController::class, 'forms']);
Route::get('/clearance', [PostController::class, 'clearance']);
Route::get('/getData', [PostController::class, 'getData']);
Route::get('/businessData', [PostController::class, 'businessData']);
Route::get('/business', [PostController::class, 'business']);
Route::post('/saveData', [PostController::class, 'saveData']);
Route::get('/sendAnnouncement', [PostController::class, 'sendAnnouncement']);



