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

Route::get('/myHome', 'MyHomeController@myHome');

Route::get('/library', 'LibraryController@library');

Route::post('fileUpload', [
   'as' => 'image.add',
   'uses' => 'UploadController@upload'
]);

Route::get('/download/{file}', 'DownloadController@download');

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
