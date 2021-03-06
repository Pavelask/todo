<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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
//     return view('welcome');
// });

//Route::get('/', [TodosController::class, 'index']);
Route::get('todos/create', [TodosController::class, 'create']);
//Route::get('todos/{id}/edit', [TodosController::class, 'edit']);

Route::resource('todos', 'TodosController');
