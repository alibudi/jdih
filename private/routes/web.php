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
    return view('umum.home');
});

Auth::routes();

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/', 'AdminController@index')->name('admin');
//     // Route::resource('/about', 'AboutController')
//     //     ->except(['create', 'edit', 'update']);
//     Route::resource('admin/kategori', 'KategoriController');
//     Route::resource('admin/produk', 'ProdukController');
// });

Route::get('/home', 'HomeController@index')->name('app');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/kategori', 'KategoriController@index');
Route::get('/admin/kategori/add', 'KategoriController@create');
Route::post('/admin/kategori', 'KategoriController@store');
Route::get('/admin/kategori/{id}', 'KategoriController@show');
Route::get('/admin/kategori/{id}', 'KategoriController@edit');
Route::put('/admin/kategori/{id}', 'KategoriController@update');
Route::delete('/admin/kategori/{id}', 'KategoriController@destroy');

Route::get('/admin/profil', 'ProfilController@index');
Route::get('/admin/profil/{id}', 'ProfilController@show');
// Route::get('/admin/profil/{id}', 'ProfilController@edit');
Route::put('/admin/profil/{id}', 'ProfilController@update');

Route::get('/admin/akun', 'UsersController@index');
Route::get('/admin/berita', 'AdminController@berita');
Route::get('/admin/galeri', 'AdminController@galeri');
Route::get('/admin/produk', 'ProdukController@index');
Route::get('/admin/produk/addProduk', 'ProdukController@addProduk');
Route::post('/admin/produk', 'ProdukController@store');
// Route::resource('/admin/kategori','AdminController@kategori');

Route::get('/produk', 'UmumController@produk');

Route::get('/insert', function (){
    DB::insert('insert into kategoris(nama_kategori) values (?)',['buku']);
    echo "data berhasil di tambah";
});

// Route::get('/read', function (){
//     $query = DB::select('select * from kategori');
// });


// Route::post('savedata', 'kategoriController@savedata');
// Route::get('edit/{id}', 'kategoriController@edit');
// Route::post('Updateblog', 'kategoriController@Updateblog');
// Route::get('delete/{id}', 'kategoriController@delete');