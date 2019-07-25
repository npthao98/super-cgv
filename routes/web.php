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
    return view('phimdangchieu');
});

Route::get('model/select-all',function(){
    $data = App\Film::all()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});

Route::get('trangChu','indexController@index');
//Route::get('thayDoiMatKhau','UserController@thayDoiMatKhau');
