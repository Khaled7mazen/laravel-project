<?php

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

Route::get('/home', 'HomeController@index')->name('home');


//route for user
Route::get('user', 'UserController@index')->name('user.index');
Route::get('user\create', 'UserController@create')->name('user.create');
Route::post('user\store', 'UserController@store')->name('user.store');
Route::get('user\serach', 'UserController@serach')->name('user.serach');
Route::get('mydata', 'UserController@mydata')->name('user.mydata');

// Route::get('members\show', 'MemberController@show')->name('members.show');


//route for admin
Route::get('admin\createnews','AdminController@createnews')->name('admin.createnews');
Route::post('admin\storenews','AdminController@storenews')->name('admin.storenews');
Route::get('admin\allnews','AdminController@allnews')->name('admin.allnews');
Route::get('admin\destroy\{id}','AdminController@destroy')->name('admin.destroy');

//route for admin2

Route::get('admin2\allsuitables','Admin2Controller@allsuitables')->name('admin2.allsuitables');
Route::post('admin2\storesuitable','Admin2Controller@storesuitable')->name('admin2.storesuitable');
Route::get('admin2\createsuitable','Admin2Controller@createsuitable')->name('admin2.createsuitable');
Route::get('admin2\createsuitable','Admin2Controller@createsuitable')->name('admin2.createsuitable');
Route::get('admin2\destroy\{id}','Admin2Controller@destroy')->name('admin2.destroy');

////route for comments
Route::post('comments\store','CommentsController@store')->name('comments.store');
