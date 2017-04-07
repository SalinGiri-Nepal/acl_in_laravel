<?php

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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'web'], function () {

    Auth::routes();

    Route::get('/author',[
        'uses' => 'HomeController@getAuthorPage',
        'as' => 'author',
        'middleware'=>'roles',
        'roles' => ['Author','Admin']
    ]);
    Route::get('/admin',[
        'uses' => 'HomeController@getAdminPage',
        'as' => 'admin',
        'middleware'=>'roles',
        'roles' => 'Admin'
    ]);
    Route::get('/author/article', [
        'uses' => 'HomeController@getGenerateArticle',
        'as' => 'author/article',
        'middleware'=>'roles',
        'roles' => ['Author']
    ]);
    Route::post('/admin/assign', [
        'uses' => 'HomeController@postAdminAssignRoles',
        'as' => '/admin/assign',
        'middleware'=>'roles',
        'roles' => 'Admin'
    ]);
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

});