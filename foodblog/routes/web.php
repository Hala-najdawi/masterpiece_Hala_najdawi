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
Route::redirect('/','/ar');
//Route::redirect('/','/Baby');
Route::group(['prefix'=>'{language}'],function(){
    Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('kids', 'KidsController');
//Route::get('babies', 'KidsController@create');
Route::resource('babies', 'BabyController');
Route::get('babies\toddler', 'BabyController@toddler');

Route::resource('Sweets', 'SweetController');
Route::resource('LunchBoxes', 'LunchBoxController');
Route::post('babies/{id}', 'BabyController@show');
Route::post('LunchBoxes/{id}', 'LunchBoxController@show');

});