<?php

use Illuminate\Support\Facades\Route;
use Botble\Base\Facades\AdminHelper;

Route::group(['namespace' => 'Botble\Casestudy2\Http\Controllers'], function () {
    AdminHelper::registerRoutes(function () {
        Route::group(['prefix' => 'casestudy2s', 'as' => 'casestudy2.'], function () {
            Route::resource('', 'Casestudy2Controller')->parameters(['' => 'casestudy2']);
        });
    });
    
    Route::group(['prefix' => '{language}'], function () {
        Route::get('case-study/{slug}', [
            'as'         => 'case-study-view',
            'uses'       => 'PublicController@GetCaseStudy',
        ]);
    })->where('language', 'en|ar');

});
