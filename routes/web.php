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
Route::get('/user', 'UserController@index');
Route::get('/HoTen/{ten}',function($ten){
	return "duong truong " . $ten;
});
route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

route::get('trangchu',[
	'as'=>'trangchu',
	'uses'=>'PageController@getThanChinh'
]);
route::get('postform', ['as'=>'postForm','uses'=>'PageController@postForm']);

route::get('list-user', ['uses' => 'UserController@list']);
route::get('edit-user', ['uses' => 'UserController@edit']);
route::post('save-user', ['uses' => 'UserController@save']);
route::get('create-user', ['uses'=> 'UserController@create']);
route::post('save-news', ['uses' => 'NewsController@save']);
route::get('create-news', ['uses'=> 'NewsController@create']);
route::get('view-user', ['uses'=> 'UserController@listUser']);
