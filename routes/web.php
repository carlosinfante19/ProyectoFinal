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

Route::get('/', 'HomeController@index');//welcome.blade.php

Route::get('page', function () {
    return view('/page');//page.blade.php
});

Route::get('category', function () {
    return view('/category');//category.blade.php
});

Route::resource( 'titles'     , 'TitlesController'     );
Route::resource( 'services'   , 'ServicesController'   );
Route::resource( 'references' , 'ReferencesController' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
