<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UnivController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [UnivController::class, ('index')])->name('Home');
Route::get('printer', [UnivController::class, ('printer')])->name('printer');
Route::get('pc', [UnivController::class, ('pc')])->name('pc');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add', [UnivController::class,('addProb')])->name('AddProblem');
Route::post('/dashboard',[UnivController::class,('requestHelp')])->name('reqHelp');
Route::get('/welcome',[UnivController::class,('fault')])->name('Fault');
