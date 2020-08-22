<?php
Route::group(['namespace' => 'Flower'], function () {
    Route::resource('flower', 'FlowerController');
    
    /* flower datatable **/
    Route::get('datatable/get/all','FlowerDataTableController@getAll')->name('flower.datable.all');
});