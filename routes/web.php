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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::group(['prefix' => "categorie", 'middleware' => 'midrel_role'], function(){



//     Route::get('/','CategorieController@index') ->name('categorie');
//     Route::get('/{id?}','CategorieController@index') ->name('categorie')->where('id', '[0-9]+');


//     Route::get('/{name?}',function($name=""){
//         return "Welcome ".$name;
//     });


// });


Route::group(['prefix' => "categories"], function(){

	Route::get('/','CategorieContorller@index')->name('list');
	Route::get('create','CategorieContorller@create')->name('create');
	Route::post('create','CategorieContorller@store')->name('store');
	Route::get('delete/{id}','CategorieContorller@destroy')->name('destroy');

	Route::get('edit/{id}','CategorieContorller@edit')->name('edit');
	Route::post('edit','CategorieContorller@update')->name('update');


	// Route::get('/{id}',[
	// 	"uses" => "CategorieContorller@index",
	// 	"as" =>"list array"
	// ])->where('id','[1-9]+')->middleware('MidRole:1');

	// Route::get('/',"CategorieContorller@index")->name('list');

	// Route::get('update', function(){
	// 	return "prefix oK";
	// });

	// Route::get('/{name?}', function($name = ""){
	// 	return "welcome ".$name;
	// })->name('welcome');

});
