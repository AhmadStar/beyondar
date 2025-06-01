<?php

use Illuminate\Support\Facades\Route;
use Botble\Base\Facades\AdminHelper;

Route::group(['namespace' => 'Botble\Projects\Http\Controllers'], function () {
    AdminHelper::registerRoutes(function () {
        Route::group(['prefix' => 'projects', 'as' => 'projects.'], function () {
            Route::resource('', 'ProjectsController')->parameters(['' => 'projects']);
        });
    });

    Route::group(['prefix' => '{language}'], function () {
        Route::get('project/{slug}', [
            'as'         => 'project-view',
            'uses'       => 'PublicController@GetProject',
        ]);
    })->where('language', 'en|ar');

    Route::group(['prefix' => '{language}'], function () {
        Route::get('projects', [
            'as'         => 'projects-view',
            'uses'       => 'PublicController@GetProjects',
        ]);
    })->where('language', 'en|ar');

});


