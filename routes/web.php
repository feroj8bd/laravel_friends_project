<?php

use App\Http\Controllers\FriendController;
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

// route for create
Route::get('/friend/create', [FriendController::class, 'create'])->name('friend.create');


// route for index
Route::get('/friend', [FriendController::class, 'index'])->name('friend.index');

// route for store
Route::post('/friend', [FriendController::class, 'store'])->name('friend.store');

// route for show
Route::get('/friend/show/{id}', [FriendController::class, 'show'])->name('friend.show');


// route for edit
Route::get('/friend/edit/{id}', [FriendController::class, 'edit'])->name('friend.edit');

// route for update
Route::post('/friend/update/{id}', [FriendController::class, 'update'])->name('friend.update');

// route for delete
Route::get('/friend/delete/{id}', [FriendController::class, 'destroy'])->name('friend.delete');
