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

Route::get('view', function () {
    return view('login');
});
Route::get('model/taikhoan/getdataquanlytaikhoanadmin','Mycontroller@getdataquanlytaikhoanadmin')->name('getdataquanlytaikhoanadmin');

Route::get('model/phantrang','Mycontroller@phantrang');
Route::post('model/login/dangnhap','Mycontroller@postlogin')->name('postlogin');

Route::get('model/quangcao/getdata', 'Mycontroller@getdatamodelquangcao')->name('getdataquangcao');

Route::get('model/danhmuc/getdata', 'Mycontroller@getdatamodeldanhmuc')->name('getdatadanhmuc');

Route::get('model/danhmuc/getdatalaptopmoinhat','Mycontroller@getdatalaptopmoinhat');

Route::get('model/linhkienlaptop/getdatalinhkienlaptop','Mycontroller@getdatalinhkienlaptop');

Route::get('model/danhmuc/getdatathietbiluutruphukien','Mycontroller@getdatathietbiluutruphukien');

Route::get('model/danhmuc/getdatathietbinghenhin','Mycontroller@getdatathietbinghenhin');

Route::post('model/sanpham/getdatasanphamchitiet','Mycontroller@getdatasanphamchitiet')->name('getdatasanphamchitiet');

Route::post('model/danhgia/getdanhgia', 'Mycontroller@getdatadanhgia')->name('getdatadanhgia');

Route::post('model/danhgia/postDanhgia', 'Mycontroller@postDanhgia')->name('postDanhgia');

Route::post('model/giohang/postgiohang', 'Mycontroller@postgiohang')->name('postgiohang');

Route::get('model/giohang/getdatagiohang', 'Mycontroller@getdatagiohang');

Route::post('model/giohang/updategiohang', 'Mycontroller@updategiohang')->name('updategiohang');

Route::get('view', function() {
    return view('login');
});

Route::post('model/giohang/delete', 'Mycontroller@delete');

Route::post('model/taikhoan/timkiem', 'Mycontroller@timkiem')->name('timkiem');

Route::get('model/taikhoan/gettaikhoan','Mycontroller@gettaikhoan');

Route::post('model/chitietdonhang/dondathang', 'Mycontroller@dondathang')->name('dondathang');

Route::post('model/dondathang/getdatahoadondondathangnguoidung', 'Mycontroller@getdatahoadondondathangnguoidung')->name('getdatahoadondondathangnguoidung');

Route::post('model/hoadon/getdatahoadondondathangadmin', 'Mycontroller@getdatahoadondondathangadmin')->name('getdatahoadondondathangadmin');

Route::post('model/danhmuc/getdatadanhmuccon',  'Mycontroller@getdatadanhmuccon')->name('getdatadanhmuccon');

Route::post('model/laptopmacbook/getdatalaptopmacbook', 'Mycontroller@getdatalaptopmacbook')->name('getdatalaptopmacbook');

Route::post('model/usser/updatephoto', 'Mycontroller@updatephoto')->name('updatephoto');

Route::post('model/dondathang/donhangganday','Mycontroller@donhangganday' )->name('donhangganday');

Route::post('model/taikhoan/updatethongtin', 'Mycontroller@updatethongtin')->name('updatethongtin');

Route::post('model/taikhoan/updatediachi', 'Mycontroller@updatediachi')->name('updatediachi');

Route::post('model/dondathang/choxetduyet',  'Mycontroller@choxetduyet')->name('choxetduyet');

Route::post('model/dondathang/dangvanchuyen',  'Mycontroller@dangvanchuyen')->name('dangvanchuyen');

Route::post('model/dondathang/dagiaohang',  'Mycontroller@dagiaohang')->name('choxetduyet');

Route::post('model/chitietdondathang/getdatachitietdondathang', 'Mycontroller@getdatachitietdondathang')->name('getdatachitietdondathang');

Route::post('model/chitietdondathang/getdatachuanhanxet', 'Mycontroller@getdatachuanhanxet')->name('getdatachuanhanxet');

Route::post('model/sanpham/getdataphantrangsanpham','Mycontroller@getdataphantrangsanpham')->name('getdataphantrangsanpham');

Route::post('model/sanpham/getdataTimkiem','Mycontroller@getdataTimkiem')->name('getdataTimkiem');

Route::post('model/donathang/updatehuydon','Mycontroller@updatehuydon')->name('updatehuydon');

Route::post("model/dondathang/dahuy",'Mycontroller@dahuy')->name('dahuy');

Route::get("model/gioithieushop/gioithieushop",'Mycontroller@gioithieushop')->name('gioithieushop');

Route::post('model/taikhoan/dangkytaikhoan','Mycontroller@dangkytaikhoan')->name('dangkytaikhoan');

Route::get("model/tintuc/getdatatintuc",'Mycontroller@getdatatintuc')->name('getdatatintuc');

Route::post('model/tintuc/timkimtintuc','Mycontroller@timkimtintuc')->name('timkimtintuc');

Route::post('model/thongtin/update','Mycontroller@update')->name('update');

Route::get('model/dondathang/getdatadangvanchuyenadmin','Mycontroller@getdatadangvanchuyenadmin')->name('getdatadangvanchuyenadmin');

Route::get('model/dondathang/getdatadahuyadmin','Mycontroller@getdatadahuyadmin')->name('getdatadahuyadmin');

Route::get('model/dondathang/dagiaohangadmin','Mycontroller@dagiaohangadmin')->name('dagiaohangadmin');

Route::get('model/dondathang/choxetduyetadmin','Mycontroller@choxetduyetadmin')->name('choxetduyetadmin');

Route::post('model/dondathang/updatedondathangadmin','Mycontroller@updatedondathangadmin')->name('updatedondathangadmin');

Route::post('model/taikhoan/DeleteAdminTai_khoan','Mycontroller@DeleteAdminTai_khoan')->name('DeleteAdminTai_khoan');

Route::post('model/tintuc/delete_NewsAdmin','Mycontroller@delete_NewsAdmin')->name('delete_NewsAdmin');

Route::post('model/tintuc/update_NewsAdmin','Mycontroller@update_NewsAdmin')->name('update_NewsAdmin');

Route::post('model/tintuc/insert_NewsAdmin','Mycontroller@insert_NewsAdmin')->name('insert_NewsAdmin');

Route::post('model/quanlysanpham/insert_ProductAdmin','Mycontroller@insert_ProductAdmin')->name('insert_ProductAdmin');



