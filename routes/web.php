<?php
use App\Http\Controllers\LoaiController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\LoginController;
use App\Models\sach;

use Illuminate\Support\Facades\Redirect;
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
    return view('user.home',['data'=>sach::all()]);
});

Route::get('/sub',function(){
    return view('user.subpage');
})->name('subpage');
Route::prefix('user')->group(function () {
    //user
    Route::get('/sach', function(){
        return view('user.sach');
    });
    Route::get('/chitietsach/{id}', function($id){
        return view('user.chitiet');
    });
    Route::get('/gioithieu',function(){
        return view('user.chitiet');
    });
});

Route::prefix('admin')->group(function () {
    //admin
    //sach
    Route::get('/', function(){
        return view ('admin.index');
    });
    Route::prefix('sach')->group(function(){
        Route::get('/index','SachController@index')->name('ad.sach.index');
        Route::get('create','SachController@create')->name('ad.sach.create');
        Route::post('store','SachController@store')->name('ad.sach.store');
    });

    //loai
    Route::get('loai','LoaiController@index')->name('ad.loai');
    Route::get('create','LoaiController@create')->name('ad.create');
    Route::post('store','LoaiController@store')->name('ad.store');
    Route::delete('delete','LoaiController@destroy')->name('ad.del');
    Route::get('loai/showdetail/{id}','LoaiController@show')->name('ad.showdelloai');
    Route::get('loai/edit/{id}','LoaiController@edit')->name('ad.loai.edit');
    Route::put('loai/update','LoaiController@update')->name('ad.update');
    // nha xb
    Route::prefix('nhaxb')->group(function(){
        Route::get('/','NhaxbController@index')->name('ad.nxb.index');
        Route::delete('/destroy','NhaxbController@destroy')->name('ad.nxb.destroy');
        Route::post('/store','NhaxbController@store')->name('ad.nxb.store');
    });
});
Route::get('login','LoginController@index')->name('login');
Route::post('checklogin','LoginController@check')->name('checklogin');
Route::get('/logout',function(){
    session()->forget('dangnhap');
    return redirect('/');
});
