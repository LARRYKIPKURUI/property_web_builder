<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Front'], function () {

    Route::get('/', "HomeController@index")->name("front.index");
    Route::get('/properties', "HomeController@properties")->name("front.properties");
    Route::get("/properties/type/{type}", "HomeController@propertiesByType")->name("front.properties.type");
    Route::get("/properties/{id}", "HomeController@detail")->name("front.properties.detail");

    Route::post("/properties/find", "HomeController@find")->name("front.properties.find");
    Route::post('/subscribe', "HomeController@subscribe")->name("front.subscribe");
    Route::get('/about', 'HomeController@about')->name('front.about');

});
