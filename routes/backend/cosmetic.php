<?php
Route::group(['namespace' => 'Cosmetic','as' =>'cosmetic.'], function () {
    Route::get('/cosmetic/list', 'CosmeticController@index')->name('index');
});
