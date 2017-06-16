<?php

Route::group(['prefix' => 'location'], function () {
    Route::get('/', 'LocationController@index');
});
