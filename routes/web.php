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
Route::post('/role', 'HomeController@role')->name('role')->middleware('auth');

Route::group(['middleware' => ['web', 'auth', 'auth.panel:user']], function () {
    Route::get('/ticket', ['uses' => 'Ticket\TicketController@index', 'as' => 'ticket.index']);
    Route::get('/ticket/new', ['uses' => 'Ticket\TicketController@add', 'as' => 'ticket.new']);
    Route::post('/ticket/save', ['uses' => 'Ticket\TicketController@store', 'as' => 'ticket.save']);
    Route::get('/ticket/{ticket}/show', ['uses' => 'Ticket\TicketController@show', 'as' => 'ticket.show']);
    Route::post('/ticket/{ticket}/reply', ['uses' => 'Ticket\TicketController@reply', 'as' => 'ticket.reply']);
});

Route::group(['prefix' => 'admin','middleware' => ['web', 'auth', 'auth.panel:admin']], function () {
    Route::get('/user', ['uses' => 'Admin\UserController@index', 'as' => 'admin.user']);
    Route::get('/user/{user}/role', ['uses' => 'Admin\UserController@roles', 'as' => 'admin.user.role']);
    Route::post('/user/{user}/role', ['uses' => 'Admin\UserController@doRoles']);
});
