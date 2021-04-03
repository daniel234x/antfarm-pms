<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');

    Route::get('dashboard', 'TeamController@index')->name('dashboard');
    Route::get('dashboard/teams/{id}', 'TeamController@show')->name('dashboard/teams/{id}');
    Route::post('dashboard', 'TeamController@store')->name('dashboard');
    Route::get('dashboard/{id}', 'TeamController@destroy')->name('dashboard.destroy');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('settings', 'SettingsController@settings');
    Route::match(array('GET','POST'), "settings", array('uses' => 'SettingsController@profile','as' => 'settings'));
});


