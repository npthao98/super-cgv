<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as IlluminateRoute;
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


Route::get('/phimdangchieu','PhimDangChieuController@index');

Route::get('/','indexController@index');

Route::get('/detailFilm/{id}','indexController@detailFilm');

Route::get('/logout','AuthController@logout');

Route::post('/saveAccount','indexController@saveAccount');

Route::post('/login_result','indexController@login_result');

Route::get('/a', function () {
    $day = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
    $today = date('d-m-20y');
    for( $i = 0 ; $i <= 6 ; $i++ ){
        if( $i == 0 ) $todayTime = strtotime($today);
        else $todayTime = strtotime('+1 day', $todayTime);
        $today = date('d-m-20y',$todayTime);
        $todayD = date('d',$todayTime);
        $todayM = date('m',$todayTime);
        echo $today.'<br>';
    }
});

//Route::post('/login_result','indexController@login_result');

Route::post('/login_result','AuthController@login');

Route::group(['middleware'=>'clientRoute'],function (){
    Route::get('/payment', 'PaymentController@index');
    Route::get('/booking','BookingController@index');
    Route::get('/myAccount','AuthController@myAccount');
    Route::get('/transactionHistory', 'AuthController@transactionHistory');
});
Route::group(['middleware'=>'RedirectMyAccount'],function (){
    Route::get('/login','indexController@login');
    Route::get('/create','indexController@create');
});

Route::get('/allCinemas/{result}', 'CinemaController@allCinemas');
