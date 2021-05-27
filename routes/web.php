<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use App\Models\cucipakaian;
use App\Models\cuciselimut;
use App\Models\cucisepatu;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/grocery', 'GroceryController@index')->name('grocery');
Route::post('/grocery', 'GroceryController@index');

Route::get('/cuciselimut', function () {
    return view('cuciselimut');
})->name('cuciselimut');

Route::get('/cucipakaian', function () {
    return view('cucipakaian');
})->name('cucipakaian');

Route::get('/cucisepatu', function () {
    return view('cucisepatu');
})->name('cucisepatu');

Route::get('/orderlist', function () {
    $cucisepatu = cucisepatu::all();
    $cuciselimut = cuciselimut::all();
    $cucipakaian = cucipakaian::all();

    return view('orderlist',compact('cucisepatu','cuciselimut','cucipakaian'));
})->name('orderlist');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('account/password', 'Account\PasswordController@edit')->name('profile');
Route::patch('account/password', 'Account\PasswordController@update')->name('profile');

Route::get('cuciselimut-form', 'CuciselimutController@index');
Route::post('/cuciselimut-form', [App\Http\Controllers\CuciselimutController::class, 'store'])->name('post-cuciselimut');
// Route::post('save1', 'CuciselimutController@store');

Route::get('cucipakaian-form', 'CucipakaianController@index');
Route::post('/cucipakaian-form', [App\Http\Controllers\CucipakaianController::class, 'store'])->name('post-cucipakaian');
// Route::post('save2', 'CucipakaianController@store');

Route::get('cucisepatu-form', 'CucisepatuController@index');
Route::post('/cucisepatu-form', [App\Http\Controllers\CucisepatuController::class, 'store'])->name('post-cucisepatu');
// Route::post('save3', 'CucisepatuController@store');
