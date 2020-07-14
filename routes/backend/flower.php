<?php
Route::group(['namespace' => 'Flower','as' =>'flower.'], function () {
    Route::get('/flower/list', 'FlowerController@index')->name('index');
});
