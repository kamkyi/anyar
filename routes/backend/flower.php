<?php
Route::group(['namespace' => 'Flower'], function () {
    Route::resource('flower', 'FlowerController');
});
