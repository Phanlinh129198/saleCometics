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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex'
]);

Route::get('product-type/{type}', [
    'as' => 'loai-san-pham',
    'uses' => 'PageController@getLoaiSP'
]);

Route::get('product-Detail/{id}', [
    'as' => 'chi-tiet-san-pham',
    'uses' => 'PageController@getDetailSP'
]);

Route::get('contacts', [
    'as' => 'lien-he',
    'uses' => 'PageController@getContacts'
]);
Route::get('about', [
    'as' => 'gioi-thieu',
    'uses' => 'PageController@getAbout'
]);
Route::get('login', [
    'as' => 'dang-nhap',
    'uses' => 'PageController@getLogin'
]);
Route::get('register', [
    'as' => 'dang-ki',
    'uses' => 'PageController@getRegister'
]);
Route::post('register', [
    'as' => 'dang-ki-1',
    'uses' => 'PageController@postRegister'
]);