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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/', array('as' => 'index', 'uses' => 'PostsController@getIndex'));
Route::get('/admin', array('as' => 'admin_area', 'uses' => 'PostsController@getAdmin'));
Route::post('/add', array('as' => 'add_new_post', 'uses' => 'PostsController@postAdd'));
Route::post('/login', array('as' => 'login', 'uses' => 'UsersController@postLogin'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@getLogout'));
Route::get('/dashboard', array('as' => 'logout', 'uses' => 'DashboardController@Dashboard'));
Route::get('/employee', array('as' => 'logout', 'uses' => 'DashboardController@employee'));
Route::post('/addemployee', array('as' => 'logout', 'uses' => 'DashboardController@addemployee'));
Route::get('/deleteemployee/{id}', array('as' => 'logout', 'uses' => 'DashboardController@deleteemployee'));
Route::get('/editemployee/{id}', array('as' => 'logout', 'uses' => 'DashboardController@editemployee'));
Route::post('/editemployeeprocess/{id}', array('as' => 'logout', 'uses' => 'DashboardController@editemployeeprocess'));

Route::get('/notification', array('as' => 'admin_area', 'uses' => 'DashboardController@notification'));

Route::get('/test', function () {
    event(new App\Events\StatusLiked('Someone'));
    return "Event has been sent!";
});

Route::get('/vue/{any}', function () {
  return view('post');
})->where('any', '.*');

