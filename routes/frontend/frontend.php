<?php
Route::group(['namespace' => 'LandingPage'], function () {
    Route::get('/', 'LandingPageController@index')->name('anyar');
});

