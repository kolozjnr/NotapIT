<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UnivController;
use App\Http\Controllers\ITUnitController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

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
//Route::get('/user/dashboard', [UnivController::class, ('dashboard')])->name('Dashboard');
Route::get('/', [UnivController::class, ('index')])->name('Home');
Route::get('printer', [UnivController::class, ('printer')])->name('printer');
Route::get('pc', [UnivController::class, ('pc')])->name('pc');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Auth::routes(['register' => false]);
Route::post('/dashboard',[UnivController::class,('requestHelp')])->name('reqHelp');
Route::get('/welcome',[UnivController::class,('fault')])->name('Fault');

Route::group(['middleware' => ['auth']], function(){
    
});

//Route for Admin Only
Route::group(['middleware' => ['auth', 'role:administrator']], function(){
    
    //Manage
    Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware(['auth:'.config('fortify.guard')])
                ->name('register');
                Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware(['auth:'.config('fortify.guard')]);
    
    Route::resource('manage', ITUnitController::class);
    Route::get('/add', [UnivController::class,('addProb')])->name('AddProblem');
    });

