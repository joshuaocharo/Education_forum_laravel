<?php
// \Debugbar::disable();
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

Route::get('/join', function () {
    return view('joinclassroom');
});

Route::get('/post', function(){
	return view('post');
});
Route::get('/notes', function(){
	return view('notes');
});
Route::view('/','homepage')->name('homepage');
// Route::post('/student/create.php', 'StudentController@create');
// notes upload about join classroom view classroom
Route::post('/uploadfile','UploadFileController@showUploadFile');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'roles'], 'roles' => 'admin'], function () {
	
Route::get('/', ['uses' => 'AdminController@index']);
Route::resource('/roles', 'RolesController');
Route::resource('/permissions', 'PermissionsController');
Route::resource('/users', 'UsersController');
Route::resource('/pages', 'PagesController');
Route::resource('/posts', 'Posts\\PostsController');
Route::resource('/activitylogs', 'ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);
Route::resource('/settings', 'SettingsController');
Route::get('/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

});

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('admin', 'Admin\AdminController@index');
