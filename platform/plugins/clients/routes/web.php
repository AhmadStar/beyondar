<?php

use Illuminate\Support\Facades\Route;
use Botble\Base\Facades\AdminHelper;

Route::group(['namespace' => 'Botble\Clients\Http\Controllers'], function () {
    AdminHelper::registerRoutes(function () {
        Route::group(['prefix' => 'clients', 'as' => 'clients.'], function () {
            Route::resource('', 'ClientsController')->parameters(['' => 'clients']);
        });
    });
});
