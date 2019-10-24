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

// Index / Welcome
Route::get('/', function () {
    return view('welcome');
});

// myHome
Route::get('/myHome', 'MyHomeController@myHome');

// Library
Route::get('/library', 'LibraryController@library');

// Uploading images
Route::post('fileUpload', [
    'as' => 'image.add',
    'uses' => 'UploadController@upload'
]);

// Downloading images
Route::get('/download/{file}', 'DownloadController@download');

// Contact
Route::get('/contact', function () {
    return view('contact');
});

// Authentifiation Laravel
Auth::routes();

// Standard Laravel Home -> not used
Route::get('/home', 'HomeController@index')->name('home');
