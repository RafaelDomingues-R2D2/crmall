<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers')->group(function(){
            Route::get('/', 'ClienteController@index')->name('index');
            Route::get('create', 'ClienteController@create')->name('create');
            Route::post('store', 'ClienteController@store')->name('store');
            Route::get('{cliente}/edit', 'ClienteController@edit')->name('edit');
            Route::PUT('update/{cliente}', 'ClienteController@update')->name('update');
            Route::DELETE('destroy/{cliente}', 'ClienteController@destroy')->name('destroy');
});
