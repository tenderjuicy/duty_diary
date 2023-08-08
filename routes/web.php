<?php
use App\Http\Controllers\DiariesController;
use App\Http\Controllers\DocumentationsController;
use App\Http\Controllers\Approval_requestController;
use App\Http\Controllers\UsersController;
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



Auth::routes();

Route::get('/admin',[App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::resource ('/diaries' , DiariesController::class);
Route::resource ('/documentations' , DocumentationsController::class);
Route::resource ('/approval_request' , Approval_requestController::class);
Route::resource ('/users' , UsersController::class);
Route::get('/users',[UsersController::class, 'index'])->name('users.index');
     Route::get('/users/create',[UsersController::class, 'create'])->name('users.create');
     Route::post('/users',[UsersController::class, 'store' ])->name('users.store');
     Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
     Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
     Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');