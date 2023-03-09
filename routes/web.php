<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\newController;
use App\Http\Controllers\userController;

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


Route::get('newView/{id}',[ newController::class, 'newView' ])->name('new');

Route::get('/',[ userController::class, 'home' ])->name('home');



Route::prefix('admin')->group(function (){

    Route::get('/dashboard',[ userController::class, 'dashboard' ])->name('dashboard')->middleware(checklogin::class);
    
    Route::get('/getLogin',[ userController::class, 'getLogin' ])->name('login');
    Route::post('/postLogin', [userController::class, 'postLogin'])->name('postLogin');

    Route::get('/getRegister', [userController::class, 'getRegister'])->name('getRegister');
    Route::post('/postRegister', [userController::class, 'postRegister'])->name('postRegister');
    
    Route::get('/add',[ userController::class, 'add' ])->name('add')->middleware(checklogin::class);
    Route::post('/addNew', [newController::class, 'addNew'])->name('addNew')->middleware(checklogin::class);

    Route::get('/getLogout',[ userController::class, 'getLogout' ])->name('logout');

    

});
