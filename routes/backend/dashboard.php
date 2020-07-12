<?php
Route::group(['namespace' => 'Dashboard'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});
