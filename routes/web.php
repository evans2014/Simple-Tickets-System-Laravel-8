<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::resource('posts', PostController::class);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('new-ticket', [App\Http\Controllers\TicketsController::class, 'create']);

Route::post('new-ticket', [App\Http\Controllers\TicketsController::class, 'store']);

Route::get('my_tickets', [App\Http\Controllers\TicketsController::class, 'userTickets']);

Route::get('tickets/{ticket_id}', [App\Http\Controllers\TicketsController::class, 'show']);

Route::post('comment', [App\Http\Controllers\CommentsController::class, 'postComment']);

Route::resource('categories', CategoryController::class);

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){

    Route::get('tickets', [App\Http\Controllers\TicketsController::class, 'index']);

    Route::post('close_ticket/{ticket_id}', [App\Http\Controllers\TicketsController::class, 'close']);



});




