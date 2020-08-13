<?php

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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/services', 'ServicesController@index')->name('services.list');
Route::get('/services/{slug}', 'ServicesController@show')->name('services.detail');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');

Route::get('/gallery', 'GalleryController@index')->name('gallery.index');

Route::get('/portfolio', 'ClientelleController@index')->name('clientelle.index');

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['prefix'=>'backend', 'namespace'=>'Backend'], function () {
    Route::group(['middleware'=>'auth'], function () {
        Route::get('/', 'DashboardController@index')->name('backend');
        Route::resource('services', 'ServicesController')->except(['update']);
        Route::post('/services/{services}', 'ServicesController@update')->name('services.update');
        Route::resource('posts', 'PostsController');
        Route::resource('pictures', 'PicturesController');
        Route::resource('tasks', 'TasksController');
        Route::resource('clients', 'ClientsController');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

