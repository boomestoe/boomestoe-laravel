<?php

// FrontEnd Routes
Route::group(['namespace' => 'User'], function(){
	// Route Beranda
	Route::get('/', 'HomeController@index')->name('beranda');
	// Route list.Berita
	Route::get('/berita', 'BlogController@blog')->name('blog');
	Route::get('berita/tag/{tag}', 'BlogController@tag')->name('tag');
	Route::get('berita/kategori/{kategori}', 'BlogController@kategori')->name('kategori');
	// Route single.Berita
	Route::get('berita/{berita}', 'BeritaController@berita')->name('berita');
	// Route About
	Route::get('/profil', 'AboutController@profil')->name('profil');
	// Route Galeri

	
});


// BackEnd Routes
Route::group(['namespace' => 'Admin'], function(){
	Route::get('admin/dashboard','DashboardController@index')->name('admin.dashboard');
	// Route Users
	Route::resource('admin/user','UserController');	
	// Route Berita
	Route::resource('admin/berita','BeritaController');	
	// Route Tag
	Route::resource('admin/tag','TagController');	
	// Route Kategori
	Route::resource('admin/kategori','KategoriController');	
	// Route Galeri
	Route::resource('admin/galeri','GaleriController');
	// Route Gambar Galeri
	Route::resource('admin/galeri-gambar','GambarController');
	// Route Gambar Slider
	Route::resource('admin/slider','SliderController');
	// Route Auth Admin
	Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
