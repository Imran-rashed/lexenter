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
   // return view('welcome');
    return redirect()->route('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'], function(){

    	// Dashboard
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        //Context
    Route::get('contextlist', 'ContextController@index')->name('context.index');
    Route::get('context/create', 'ContextController@create')->name('context.create');
        //Article
    Route::get('articlelist', 'ArticleController@index')->name('article.index');
    Route::get('article/create', 'ArticleController@create')->name('article.create');
        //Term
    Route::get('termlist', 'TermController@index')->name('term.index');
    Route::get('term/create', 'TermController@create')->name('term.create');
        //Search
    Route::get('advancedsearch', 'AdvnacedSearchController@index')->name('advancedsearch.index');
        //Term
    Route::get('users', 'UserController@index')->name('user.index');
    Route::get('term/create', 'UserController@create')->name('user.create');

});

