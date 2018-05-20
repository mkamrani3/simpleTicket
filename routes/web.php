<?php

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

use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', 'HomeController@index')->name('index')->middleware('auth.panel:guest,user,expert,admin');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth.panel:guest,user,expert,admin');

Route::group(['middleware' => ['web', 'auth', 'auth.panel:guest']], function () {
    Route::get('/ticket', ['uses' => 'Ticket\TicketController@index', 'as' => 'ticket.index']);
    Route::get('/ticket/new', ['uses' => 'Ticket\TicketController@new', 'as' => 'ticket.new']);
});
