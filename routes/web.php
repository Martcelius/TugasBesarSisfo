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
    return view('welcome');
});

//Logged in users/seller cannot access or send requests these pages
//Route::group(['middleware' => 'admin_before'],function() {

Route::get('admin_login', 'AdminLoginController@showLoginForm');
Route::post('admin_login', 'AdminLoginController@login');
//});

//Only logged in sellers can access or send requests to these pages
//Route::group(['middleware' => 'admin_auth'],function() {

Route::post('admin_logout', 'AdminLoginController@logout');
Route::get('/adminawal','AdminController@index');

Route::get('/kelolaguru','KelolaGuruController@index');
Route::get('/addguru','KelolaGuruController@create');
Route::post('/storeguru', 'KelolaGuruController@store');
Route::get('/editguru/{nip}', 'KelolaGuruController@edit');
Route::post('/updateguru/{nip}', 'KelolaGuruController@update');
Route::get('/deleteguru/{nip}', 'KelolaGuruController@destroy');

Route::get('/kelolasiswa','KelolaSiswaController@index');
Route::get('/addsiswa','KelolaSiswaController@create');
Route::post('/storesiswa', 'KelolaSiswaController@store');
Route::get('/editsiswa/{nis}', 'KelolaSiswaController@edit');
Route::post('/updatesiswa/{nis}', 'KelolaSiswaController@update');
Route::get('/deletesiswa/{nis}', 'KelolaSiswaController@destroy');

//});

//Route::get('/kelolaguru','AdminController@kelolaguru');
//Route::get('/kelolasiswa','AdminController@kelolasiswa');
    
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/siswaawal','SiswaController@index');
Route::get('/siswalihatnilai','Siswa_KelolaNilaiController@index');
Route::get('/siswakelolamateri','Siswa_KelolaMateriController@index');
Route::get('/siswakelolatugas','Siswa_KelolaTugasController@index');

Route::get('/guruawal','GuruController@index');
Route::get('/gurukelolanilai','Guru_KelolaNilaiController@index');
Route::get('/gurukelolamateri','Guru_KelolaMateriController@index');
Route::get('/guruaddmateri','Guru_KelolaMateriController@showUpload');
Route::get('/gurukelolatugas','Guru_KelolaTugasController@index');
Route::get('/guruaddtugas','Guru_KelolaTugasController@showUpload');
Route::get('/absen3','GuruController@absen3');

Auth::routes();

Route::get('/home', 'HomeController@index');
