<?php

use Illuminate\Support\Facades\Route;


//controller CRUD
use App\Http\Controllers\ComicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('pages.home');
// });


//genero tramite controller tutte le rotte per le crud
Route::resource('/', ComicController::class);