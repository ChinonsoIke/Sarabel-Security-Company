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

Route::get('backend/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('backend/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('backend/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::post('backend/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('backend/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('backend/password/reset', 'Auth\AdminResetPasswordController@reset');
Route::get('backend/password/reset/{token}', 'Auth\AdminResetPasswordController@sendResetForm')->name('admin.password.reset');

Route::group(['prefix'=>'backend', 'namespace'=>'Backend'], function () {
    Route::group(['middleware'=>'auth:admin'], function () {
        Route::get('/', 'DashboardController@index')->name('backend');
        Route::resource('services', 'ServicesController')->except(['update']);
        Route::post('/services/{services}', 'ServicesController@update')->name('services.update');
        Route::resource('posts', 'PostsController');
        Route::resource('pictures', 'PicturesController');
        Route::resource('tasks', 'TasksController')->except(['update', 'create']);
        Route::get('/tasks/create/{id}', 'TasksController@create')->name('tasks.create');
        Route::resource('clients', 'ClientsController');
        Route::resource('files','FilesController', ['as'=>'backend'])->except(['update', 'create']);
        Route::get('/files/create/{id}', 'FilesController@create')->name('backend.files.create');
        Route::get('/files/download/{id}', 'FilesController@downloadFile')->name('backend.files.download');
        Route::resource('projects','ProjectsController', ['as'=>'backend'])->except(['update']);
        Route::resource('users','UsersController')->except(['update']);
    });
});

Route::group(['prefix'=>'users', 'namespace'=>'Users'], function () {
    Route::group(['middleware'=>'auth'], function () {
        Route::get('/', 'DashboardController@index')->name('users.dashboard');
        Route::resource('projects','ProjectsController')->except(['update']);
        Route::post('/projects/{id}', 'ProjectsController@update')->name('projects.update');
        Route::resource('files','FilesController')->except(['update', 'create']);
        Route::post('/files/{id}', 'FilesController@update')->name('files.update');
        Route::get('/files/create/{id}', 'FilesController@create')->name('files.create');
        Route::get('/files/download/{id}', 'FilesController@downloadFile')->name('files.download');
    });
});

Auth::routes();
Route::get('users/logout', 'Auth\LoginController@logout')->name('user.logout');


Route::get('/home', 'HomeController@index')->name('home');

