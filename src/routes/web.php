<?php

use Illuminate\HTTP\Request;

Route::group(['namespace'=> 'Package\Contact\Http\Controllers'], function(){

    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contactsubmit','ContactController@send')->name('contactsubmit');

});