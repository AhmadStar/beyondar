<?php

use Illuminate\Support\Facades\Route;
use Botble\Base\Facades\AdminHelper;

Route::group(['namespace' => 'Botble\Services\Http\Controllers'], function () {
    Theme::registerRoutes(function () {
        Route::get('service/{slug}', [
            'as' => 'public.service-detail',
            'uses' => 'PublicController@service',
        ]);
    });
    AdminHelper::registerRoutes(function () {
        Route::group(['prefix' => 'services', 'as' => 'services.'], function () {
            Route::resource('', 'ServicesController')->parameters(['' => 'services']);
        });
    });
});
