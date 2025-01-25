<?php

use \Illuminate\Support\Facades\Route;

Route::prefix(config('callmeaf-base.api.prefix_url'))->as(config('callmeaf-base.api.prefix_route_name'))->middleware(config('callmeaf-base.api.middlewares'))->group(function() {
    Route::prefix('excels')->as('excels.')->controller(config('callmeaf-excel.controllers.excels'))->group(function() {
        Route::get('/export/{key}','export')->name('export');
        Route::get('/import/{key}','import')->name('import');
    });
});
