<?php
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Auth;
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
//User Routes
Route::group(['namespace'=>'User'], function(){//(Route group function)

Route::get('/', 'HomeController@index')->name('user.home');
Route::get('/dashboard','DashboardController@index')->name('user.dashboard');
Route::get('/post/{slug}','PostController@index')->name('post');
Route::get('tag/{slug}','HomeController@tag')->name('tag');
Route::get('category/{slug}','HomeController@category')->name('category');
Route::get('/page/{pageinfo}','PageController@index')->name('page');
Route::post('/contact','ContactController@contact')->name('contact');
});
Auth::routes();

//Admin Routes

Route::group(['namespace'=>'Admin'],function(){

Route::get('/admin/home','HomeController@index')->name('admin');
//Admin Log in Routes
Route::get('/admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin-login','Auth\LoginController@login');

Route::get('admin-logout','Auth\LoginController@logout')->name('admin.logout');
//Admin Resource Routes
Route::resource('/admin/post','PostController');
Route::resource('/admin/category','CategoryController');
Route::resource('/admin/tag','TagController');
Route::resource('/admin/user','UserController');
Route::resource('/admin/role','RoleController');
Route::resource('/admin/permission','PermissionController');
Route::resource('/admin/page','PageController');

});


Route::put('/comment/{id}','CommentController@store')->name('comment.store');