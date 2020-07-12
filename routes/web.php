
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','Frontend\FrontendController@index');

Auth::routes();

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
  include_route_files(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend'], function () {
  /*
   * These routes need view-backend permission
   * (good if you want to allow more than one group in the backend,
   * then limit the backend features by different roles or permissions)
   *
   * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
   * These routes can not be hit if the password is expired
   */
  include_route_files(__DIR__.'/backend/');
});


