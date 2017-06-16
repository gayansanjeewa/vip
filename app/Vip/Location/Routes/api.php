<?php

Route::group(['prefix' => 'location'], function () {
    Route::get('/', 'LocationApiController@api');
});
