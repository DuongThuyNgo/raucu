<?php
use Illuminate\Support\Facades\Route;

// Route::group(['namespace' => 'Backend'], function () {
//     Route::group(['namespace' => 'Admin'], function () {
//         Route::get('admin/login','AdminLoginController@getLogin')->name('get_backend.login');
//         Route::post('login','AdminLoginController@postLogin');

//     });
// });

Route::group(['namespace' => 'Backend','prefix' => 'admin'], function () {
    Route::get('','BackendHomeController@index')->name('get_backend.home');//Trang chủ


    Route::prefix('loai_san_pham')->group( function () {
        Route::get('','BackendLoaiSanPhamController@index')->name('get_backend.loai_san_pham.index');

        Route::get('create','BackendLoaiSanPhamController@create')->name('get_backend.loai_san_pham.create');
        Route::post('create','BackendLoaiSanPhamController@store');

        Route::get('update/{id}','BackendLoaiSanPhamController@edit')->name('get_backend.loai_san_pham.update');
        Route::post('update/{id}','BackendLoaiSanPhamController@update');

        Route::get('delete/{id}','BackendLoaiSanPhamController@delete')->name('get_backend.loai_san_pham.delete');

  });

  Route::prefix('san_pham')->group( function () {
    Route::get('','BackendSanPhamController@index')->name('get_backend.san_pham.index');

    Route::get('create','BackendSanPhamController@create')->name('get_backend.san_pham.create');
    Route::post('create','BackendSanPhamController@store');

    Route::get('update/{id}','BackendSanPhamController@edit')->name('get_backend.san_pham.update');
    Route::post('update/{id}','BackendSanPhamController@update');

    Route::get('view/{id}','BackendSanPhamController@editview')->name('get_backend.san_pham.view');

    Route::get('delete/{id}','BackendSanPhamController@delete')->name('get_backend.san_pham.delete');
    Route::post('paging', 'BackendSanPhamController@paging');

});



Route::prefix('gia_ban')->group( function () {
    Route::get('','BackendGiaBanController@index')->name('get_backend.gia_ban.index');

    Route::get('create','BackendGiaBanController@create')->name('get_backend.gia_ban.create');
    Route::post('create','BackendGiaBanController@store');

    Route::get('update/{id}','BackendGiaBanController@edit')->name('get_backend.gia_ban.update');
    Route::post('update/{id}','BackendGiaBanController@update');

    Route::get('delete/{id}','BackendGiaBanController@delete')->name('get_backend.gia_ban.delete');

});

Route::prefix('nha_cung_cap')->group( function () {
    Route::get('','BackendNhaCungCapController@index')->name('get_backend.nha_cung_cap.index');

    Route::get('create','BackendNhaCungCapController@create')->name('get_backend.nha_cung_cap.create');
    Route::post('create','BackendNhaCungCapController@store');

    Route::get('update/{id}','BackendNhaCungCapController@edit')->name('get_backend.nha_cung_cap.update');
    Route::post('update/{id}','BackendNhaCungCapController@update');

    Route::get('delete/{id}','BackendNhaCungCapController@delete')->name('get_backend.nha_cung_cap.delete');

});





Route::prefix('hoa_don_nhap')->group( function () {
    Route::get('','BackendHoaDonNhapController@index')->name('get_backend.hoa_don_nhap.index');

    Route::get('create','BackendHoaDonNhapController@create')->name('get_backend.hoa_don_nhap.create');
    Route::post('create','BackendHoaDonNhapController@store');

    Route::get('update/{id}','BackendHoaDonNhapController@edit')->name('get_backend.hoa_don_nhap.update');
    Route::post('update/{id}','BackendHoaDonNhapController@update');

    Route::get('show/{id}','BackendHoaDonNhapController@show')->name('get_backend.hoa_don_nhap.show');

    Route::post('create_item/{id}','BackendChiTietHoaDonNhapController@store_item');

    Route::get('update_item/{id}','BackendChiTietHoaDonNhapController@edit_item')->name('get_backend.chi_tiet_hoa_don_nhap.update');
    Route::post('update_item/{id}','BackendChiTietHoaDonNhapController@update_item');

    Route::get('delete_item/{id}','BackendChiTietHoaDonNhapController@delete_item')->name('get_backend.chi_tiet_hoa_don_nhap.delete');
});

Route::prefix('don_hang')->group( function () {
    Route::get('','BackendDonHangController@index')->name('get_backend.don_hang.index');
    Route::get('view/{id}','BackendDonHangController@view')->name('get_backend.don_hang.view');
    Route::get('success/{id}','BackendDonHangController@success')->name('get_backend.don_hang.success');
    Route::get('cancel/{id}','BackendDonHangController@cancel')->name('get_backend.don_hang.cancel');
    Route::get('delete/{id}','BackendDonHangController@delete')->name('get_backend.don_hang.delete');
});
Route::prefix('chi_tiet_don_hang')->group( function () {
    Route::get('delete/{id}','BackendChiTietDonHangController@delete')->name('get_backend.chi_tiet_don_hang.delete');
});

Route::prefix('bai_viet')->group( function () {
    Route::get('','BackendTinTucController@index')->name('get_backend.tin_tuc.index');

    Route::get('create','BackendTinTucController@create')->name('get_backend.tin_tuc.create');
    Route::post('create','BackendTinTucController@store');

    Route::get('update/{id}','BackendTinTucController@edit')->name('get_backend.tin_tuc.update');
    Route::post('update/{id}','BackendTinTucController@update');

    Route::get('delete/{id}','BackendTinTucController@delete')->name('get_backend.tin_tuc.delete');

});
});
 ?>