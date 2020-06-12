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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Route::get('/Member','HomeController@admin')->name('memer');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/UserManagement', 'UserManagementController@index')->name('UserManagement');
Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
{
Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
});

Route::group(['middleware' => 'App\Http\Middleware\Member'], function()
{
Route::match(['get', 'post'], '/memberOnlyPage/', 'HomeController@member');
});
//Route::get('admin/routes', 'HomeController@admin')->middleware('Redirector');
Route::get('/ModuleSettings/{id}','UserManagementController@ModuleRestrictionShow')->name('ShowModules');
Route::get('/Approved/{id}','UserManagementController@ModuleRestrictionSave')->name('Allowed');
Route::get('/Deactivated/{id}','UserManagementController@Deactivate')->name('Deactivate');
Route::get('/Reactivated/{id}','UserManagementController@Reactivate')->name('Reactivate');
Route::get('/AdminAccepted/{id}','UserManagementController@AdminAccept')->name('AdminAccept');
Route::get('/ProjectMenu', 'ProjectController@index')->name('ProjectMenu');
Route::get('/Created','ProjectController@CreateProject')->name('CreateProject');


