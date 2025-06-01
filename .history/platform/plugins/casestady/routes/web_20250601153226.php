<?php

use Illuminate\Support\Facades\Route;
use Botble\Base\Facades\AdminHelper;

Route::group(['namespace' => 'Botble\CaseStady\Http\Controllers'], function () {
    AdminHelper::registerRoutes(function () {
        Route::group(['prefix' => 'casestudies', 'as' => 'casestudy.'], function () {
            Route::resource('', 'CaseStudyController')->parameters(['' => 'casestudy']);
        });
    });
    Route::group(['prefix' => '{language}'], function () {
        Route::get('case-study/{slug}', [
            'as'         => 'case-study-view',
            'uses'       => 'PublicController@GetCaseStudy',
        ]);
    })->where('language', 'en|ar');
});
