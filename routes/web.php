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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hi',function(){
	return view('hi');
});
Route::get('/hi/{name}',function($name){
	return " hello $name";
});
Route::get('/header', function () {
    return view('headerfooter.header');
});
Route::get('/help-center',[
    'uses' => 'MainController@index',
    'as'=> 'MainController.helpCenter'
]);
Route::get('/help-center/articles/{slug}',[
    'uses' => 'MainController@show',
    'as'=> 'MainController.singleArticle'
]);
Route::get('/help-center/tickets/new',[
    'uses' => 'MainController@create',
    'as'=> 'MainController.addTicket'
]);
Route::get('/helpCenter/Tickets',[
    'uses' => 'MainController@myTickets',
    'as'=> 'MainController.myTickets'
]);
Route::post('/helpCenter/Tickets/createTicket',[
    'uses' => 'MainController@store_ticket',
    'as'=> 'MainController.store_ticket'
]);
Route::get('/helpCenter/categories/{slug}',[
    'uses' => 'MainController@getCategories',
    'as'=> 'MainController.getCategories'
]);
Route::get('/helpCenter/search/{word}',[
    'uses' => 'MainController@search',
    'as'=> 'MainController.search'
]);
Route::get('/helpCenter/search-article/{word}',[
    'uses' => 'MainController@search_ajax',
    'as'=> 'MainController.search_ajax'
]);
Route::post('/help-center/article/{slug}/{val}',[
    'uses' => 'MainController@feedback',
    'as'=> 'MainController.feedback'
]);
Route::post('/help-center/filter',[
    'uses' => 'MainController@filter_articles',
    'as'=> 'MainController.filter_articles'
]);
Auth::routes();
Route::get('logout', 'HomeController@logout');
Route::get('/home', 'MainController@index')->name('home');

// arabic routes

Route::get('/helpCenter-ar',[
    'uses' => 'MainControllerAr@index',
    'as'=> 'MainControllerAr.helpCenter'
]);
Route::get('/helpCenter-ar/articles/{slug}',[
    'uses' => 'MainControllerAr@show',
    'as'=> 'MainControllerAr.singleArticle'
]);
Route::get('/helpCenter-ar/tickets/new',[
    'uses' => 'MainControllerAr@create',
    'as'=> 'MainControllerAr.addTicket'
]);
Route::get('/helpCenter-ar/Tickets',[
    'uses' => 'MainControllerAr@myTickets',
    'as'=> 'MainControllerAr.myTickets'
]);
Route::post('/helpCenter-ar/Tickets/createTicket',[
    'uses' => 'MainControllerAr@store_ticket',
    'as'=> 'MainControllerAr.store_ticket'
]);
Route::get('/helpCenter-ar/categories/{slug}',[
    'uses' => 'MainControllerAr@getCategories',
    'as'=> 'MainControllerAr.getCategories'
]);
Route::get('/helpCenter-ar/search/{word}',[
    'uses' => 'MainControllerAr@search',
    'as'=> 'MainControllerAr.search'
]);
Route::get('/helpCenter-ar/search-article/{word}',[
    'uses' => 'MainControllerAr@search_ajax',
    'as'=> 'MainControllerAr.search_ajax'
]);
Route::post('/help-helpCenter-ar/article/{slug}/{val}',[
    'uses' => 'MainControllerAr@feedback',
    'as'=> 'MainControllerAr.feedback'
]);
Route::post('/helpCenter/filter',[
    'uses' => 'MainControllerAr@filter_articles',
    'as'=> 'MainControllerAr.filter_articles'
]);