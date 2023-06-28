<?php

use GuzzleHttp\Psr7\Request;
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

$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages

Route::get('/public',function(Request $request){
    dd("HOLA!!!");
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
$controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');

    //users
    Route::get('/Users', $controller_path . '\pages\Users@index')->name('pages-users');
    Route::get('/Users/create', $controller_path . '\pages\Users@create')->name('pages-users-create');
    Route::post('/users/store', $controller_path . '\pages\Users@store')->name('pages-users-store');
    Route::get('/Users/show/{user_id}', $controller_path . '\pages\Users@show')->name('pages-users-show');
    Route::get('/Users/update', $controller_path . '\pages\Users@update')->name('pages-users-update');
    Route::get('/Users/destroy/{user_id}', $controller_path . '\pages\Users@destroy')->name('pages-users-destroy');

    //types
    Route::get('/types', $controller_path . '\pages\Types@index')->name('pages-types');
    Route::get('/types/create', $controller_path . '\pages\Types@create')->name('pages-types-create');
    Route::post('/types/store', $controller_path . '\pages\Types@store')->name('pages-types-store');
    Route::get('/types/show/{types_id}', $controller_path . '\pages\Types@show')->name('pages-types-show');
    Route::get('/types/update', $controller_path . '\pages\Types@update')->name('pages-types-update');
    Route::get('/types/destroy/{types_id}', $controller_path . '\pages\Types@destroy')->name('pages-types-destroy');
    Route::get('/types/switch/{types_id}', $controller_path . '\pages\Types@switch')->name('pages-types-switch');

    //sos
    Route::get('/keys', $controller_path . '\pages\SistemasOperativos@index')->name('pages-sos');
    Route::get('/keys/create', $controller_path . '\pages\SistemasOperativos@create')->name('pages-sos-create');
    Route::post('/keys/store', $controller_path . '\pages\SistemasOperativos@store')->name('pages-sos-store');
    Route::get('/keys/show/{sos_id}', $controller_path . '\pages\SistemasOperativos@show')->name('pages-sos-show');
    Route::get('/keys/update', $controller_path . '\pages\SistemasOperativos@update')->name('pages-sos-update');
    Route::get('/keys/destroy/{sos_id}', $controller_path . '\pages\SistemasOperativos@destroy')->name('pages-sos-destroy');
    Route::get('/keys/switch/{sos_id}', $controller_path . '\pages\SistemasOperativos@switch')->name('pages-sos-switch');

    
    //switch de roles
    Route::get('/roles/switch/{user_id}', $controller_path . '\pages\Users@switch')->name('pages-users-switch-role');
});
