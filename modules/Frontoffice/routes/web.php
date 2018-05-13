<?php

Route::group(['middleware' => 'web', 'prefix' => 'frontoffice', 'namespace' => 'Modules\Frontoffice\Http\Controllers'], function()
{
    Route::get('/', 'FrontofficeController@index');
});
