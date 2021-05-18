<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'User','prefix' => 'user','middleware' => 'CheckLoginUser'], function () {
    Route::get('','UserController@index')->name('get_user.home');//Trang chủ
    Route::get('thong_tin_ca_nhan/{id}','ProfileController@index')->name('get_user.thong_tin_ca_nhan.index');
    Route::post('thong_tin_ca_nhan/{id}','ProfileController@update');
    Route::get('don_hang','OrderController@index')->name('get_user.don_hang.index');
});
 ?>
