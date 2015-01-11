<?php

use Illuminate\Routing\Router;
/** @var Router $router */
/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/
$router->group(['prefix' => LaravelLocalization::setLocale(), 'before' => 'LaravelLocalizationRedirectFilter|auth.admin|permissions'], function (Router $router) {
    $router->group(['prefix' => Config::get('core::core.admin-prefix').'/place', 'namespace' => 'Modules\Place\Http\Controllers'], function (Router $router) {

        $router->resource('places', 'Admin\PlaceController', ['except' => ['show'], 'names' => [
            'index' => 'admin.place.place.index',
            'create' => 'admin.place.place.create',
            'store' => 'admin.place.place.store',
            'edit' => 'admin.place.place.edit',
            'update' => 'admin.place.place.update',
            'destroy' => 'admin.place.place.destroy',
        ]]);
    });
});
