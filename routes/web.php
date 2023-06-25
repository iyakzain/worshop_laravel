<?php

use App\Http\Controllers\MyController;
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

// Route::get('/pertambahan', function () {
//     return "ini pertambahan";
// });

// Route::get('/{angka1}/{angka2}', function ($angka1,$angka2) {
    // $num1 = (int)$angka1;
    // $num2 = (int)$angka2;
    // $hasil = $num1 *$num2;
    // return "hasil : {$hasil}";
// });

Route::get('/pertambahan',[MyController::class, 'index']);
Route::get('/perkalian/{angka1}/{angka2}',[MyController::class, 'perkalian']);