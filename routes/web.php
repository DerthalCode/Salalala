<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KabinetasController;

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

Route::get('/',[KabinetasController::class, 'index']);
Route::get('/birstonas',[KabinetasController::class, 'birstonas']);
Route::get('/druskininkai',[KabinetasController::class, 'druskininkai']);
Route::get('/admin',[KabinetasController::class, 'adminview']);
Route::get('/add-event',[KabinetasController::class, 'addEvent']);
Route::post('/store',[KabinetasController::class,'storeEvent']);
Route::get('/delete/kabinetas/{kabinetas}',[KabinetasController::class, 'deleteEvent']);
Route::get('/update/kabinetas/{kabinetas}',[KabinetasController::class, 'updateEvent']);
Route::post('/update/{kabinetas}',[KabinetasController::class,'storeUpdate'])->name('admin.update.post.kabinetas');

