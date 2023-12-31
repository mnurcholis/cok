<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::resource('file_image', FileController::class);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('galeri', [App\Http\Controllers\HomeController::class, 'galeri'])->name('galeri');
Route::get('produk', [App\Http\Controllers\HomeController::class, 'produk'])->name('produk');
Route::get('/shop-product/{id}', [App\Http\Controllers\HomeController::class, 'shop_product'])->name('shop-product');
Route::get('/page/{slug}', [App\Http\Controllers\PageController::class, 'index'])->name('page.detail');

Route::group(['namespace' => 'auth'], function () {
    Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
    Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register_action'])->name('register.action');
    Route::post('reset_password_action', [App\Http\Controllers\Auth\RegisterController::class, 'reset_password_action'])->name('resetpassword.action');
    Route::post('forgot_send', [App\Http\Controllers\Auth\RegisterController::class, 'forgot_send'])->name('forgot.send');
    Route::get('forgot', [App\Http\Controllers\Auth\RegisterController::class, 'forgot_the_password']);
    Route::get('activate', [App\Http\Controllers\Auth\RegisterController::class, 'activate']);
    Route::get('reset_password', [App\Http\Controllers\Auth\RegisterController::class, 'reset_password']);
    Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
    Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login_action'])->name('login.action');
    Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});



/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => ['auth', 'user-access:admin']], function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index']);
    Route::get('home', [App\Http\Controllers\Admin\HomeController::class, 'index']);
    /*
    |--------------------------------------------------------------------------
    | Kategori
    |--------------------------------------------------------------------------
    */
    Route::get('produk/kategori', [App\Http\Controllers\Admin\KategoriController::class, 'index']);
    Route::get('kategori/json', [App\Http\Controllers\Admin\KategoriController::class, 'json'])->name('kategori.list');
    Route::post('kategori/save', [App\Http\Controllers\Admin\KategoriController::class, 'save'])->name('save.kategori');
    Route::post('kategori/update', [App\Http\Controllers\Admin\KategoriController::class, 'update'])->name('update.kategori');
    Route::delete('delete_kategori', [App\Http\Controllers\Admin\KategoriController::class, 'delete']);
    /*
    |--------------------------------------------------------------------------
    | Kategori
    |--------------------------------------------------------------------------
    */
    Route::get('galeri', [App\Http\Controllers\Admin\GaleriController::class, 'index']);
    Route::get('galeri/json', [App\Http\Controllers\Admin\GaleriController::class, 'json'])->name('galeri.list');
    Route::post('galeri/save', [App\Http\Controllers\Admin\GaleriController::class, 'save'])->name('save.galeri');
    Route::post('galeri/update', [App\Http\Controllers\Admin\GaleriController::class, 'update'])->name('update.galeri');
    Route::delete('delete_galeri', [App\Http\Controllers\Admin\GaleriController::class, 'delete']);
    /*
    |--------------------------------------------------------------------------
    | Produk
    |--------------------------------------------------------------------------
    */
    Route::get('produk/produk', [App\Http\Controllers\Admin\ProdukController::class, 'index']);
    Route::get('produk/create', [App\Http\Controllers\Admin\ProdukController::class, 'create'])->name('create.produk');
    Route::get('produk/json', [App\Http\Controllers\Admin\ProdukController::class, 'json'])->name('produk.list');
    Route::get('/edit-produk/{id}', [App\Http\Controllers\Admin\ProdukController::class, 'edit'])->name('edit-produk');
    Route::post('produk/save', [App\Http\Controllers\Admin\ProdukController::class, 'save'])->name('upload-produk');
    Route::put('/produk/update/{id}', [App\Http\Controllers\Admin\ProdukController::class, 'update'])->name('update-produk');
    Route::delete('produk/hapus_gambar', [App\Http\Controllers\Admin\ProdukController::class, 'hapus_gambar'])->name('hapus-gambar');
    Route::delete('produk/delete', [App\Http\Controllers\Admin\ProdukController::class, 'delete']);
    /*
    |--------------------------------------------------------------------------
    | PaketCCTV
    |--------------------------------------------------------------------------
    */
    Route::get('paketcctv', [App\Http\Controllers\Admin\PaketcctvController::class, 'index']);
    Route::get('paketcctv/create', [App\Http\Controllers\Admin\PaketcctvController::class, 'create'])->name('create.paketcctv');
    Route::get('paketcctv/json', [App\Http\Controllers\Admin\PaketcctvController::class, 'json'])->name('paketcctv.list');
    Route::get('/edit-paketcctv/{id}', [App\Http\Controllers\Admin\PaketcctvController::class, 'edit'])->name('edit-paketcctv');
    Route::post('paketcctv/save', [App\Http\Controllers\Admin\PaketcctvController::class, 'save'])->name('upload-paketcctv');
    Route::put('/paketcctv/update/{id}', [App\Http\Controllers\Admin\PaketcctvController::class, 'update'])->name('update-paketcctv');
    Route::delete('paketcctv/delete', [App\Http\Controllers\Admin\PaketcctvController::class, 'delete']);
    /*
    |--------------------------------------------------------------------------
    | Menu
    |--------------------------------------------------------------------------
    */
    Route::get('setting/menu', [App\Http\Controllers\Admin\Setting\MenuController::class, 'index']);
    Route::get('setting/menu/json', [App\Http\Controllers\Admin\Setting\MenuController::class, 'json'])->name('menu.list');
    Route::get('setting/menu/daftar', [App\Http\Controllers\Admin\Setting\MenuController::class, 'daftar'])->name('menu.daftar');
    Route::post('setting/menu/save', [App\Http\Controllers\Admin\Setting\MenuController::class, 'save'])->name('save.menu');
    Route::post('setting/menu/update', [App\Http\Controllers\Admin\Setting\MenuController::class, 'update'])->name('update.menu');
    Route::delete('delete_menu', [App\Http\Controllers\Admin\Setting\MenuController::class, 'delete']);
    /*
    |--------------------------------------------------------------------------
    | Page
    |--------------------------------------------------------------------------
    */
    Route::get('page', [App\Http\Controllers\Admin\PageController::class, 'index']);
    Route::get('page/create', [App\Http\Controllers\Admin\PageController::class, 'create'])->name('create.page');
    Route::get('page/json', [App\Http\Controllers\Admin\PageController::class, 'json'])->name('page.list');
    Route::post('page/store', [App\Http\Controllers\Admin\PageController::class, 'store'])->name('page.store');
    Route::get('/edit-page/{id}', [App\Http\Controllers\Admin\PageController::class, 'edit'])->name('edit-page');
    Route::post('update/{id}', [App\Http\Controllers\Admin\PageController::class, 'update'])->name('update-page');
    Route::delete('page/delete', [App\Http\Controllers\Admin\PageController::class, 'delete']);
    /*
    |--------------------------------------------------------------------------
    | Site Operator
    |--------------------------------------------------------------------------
    */
    Route::get('data/site', [App\Http\Controllers\Admin\SiteController::class, 'index']);
    Route::get('json', [App\Http\Controllers\Admin\SiteController::class, 'json'])->name('site_operator.list');
    Route::post('site/save', [App\Http\Controllers\Admin\SiteController::class, 'save'])->name('save.site_operator');
    Route::post('site/update', [App\Http\Controllers\Admin\SiteController::class, 'update'])->name('update.site_operator');
    Route::delete('delete_site', [App\Http\Controllers\Admin\SiteController::class, 'delete']);
    /*
    |--------------------------------------------------------------------------
    | Site Operator
    |--------------------------------------------------------------------------
    */
    Route::get('retribusi', [App\Http\Controllers\Admin\RetribusiController::class, 'index']);
    Route::get('retribusi/json', [App\Http\Controllers\Admin\RetribusiController::class, 'json'])->name('retribusi.list');
    Route::post('retribusi/save', [App\Http\Controllers\Admin\RetribusiController::class, 'save'])->name('save.retribusi');
    Route::post('retribusi/update', [App\Http\Controllers\Admin\RetribusiController::class, 'update'])->name('update.retribusi');
    Route::delete('delete_retribusi', [App\Http\Controllers\Admin\RetribusiController::class, 'delete']);
    /*
    |--------------------------------------------------------------------------
    | Settng Website
    |--------------------------------------------------------------------------
    */
    Route::get('settings', [App\Http\Controllers\Admin\SettingController::class, 'index']);
    Route::post('save_settings', [App\Http\Controllers\Admin\SettingController::class, 'save']);
});
