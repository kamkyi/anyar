<?php
Route::group(['namespace' => 'Poll','as' =>'poll.'], function () {
    Route::get('/poll/list', 'PollController@index')->name('index');
});
