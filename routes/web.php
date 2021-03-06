<?php

use App\Http\Controllers\admin\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/log', function () {
//     return view('admin.login');
// });

Route::get('/login',[AuthController::class,'login']);
Route::post('/main-home',[AuthController::class,'home'])->name('main-home');

Route::get('/register',[AuthController::class,'register']);
Route::post('/user-home',[AuthController::class,'userHome'])->name('user-home');