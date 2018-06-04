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
route::get('/', ['uses' => 'UserController@listUser']);

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
route::get('/edit-user/{id}', ['uses' => 'UserController@getUser']);
route::post('save-user', ['uses' => 'UserController@save']);
route::get('create-user', ['uses'=> 'UserController@create']);
route::post('save-news', ['uses' => 'NewsController@save']);
route::get('create-news', ['uses'=> 'NewsController@create']);
route::get('view-user', ['uses'=> 'UserController@listUser']);
route::post('to-create-user', ['uses' => 'UserController@save']);
route::get('/view-profile-user/{id}', ['uses'=> 'AuthController@profile']);
route::post('login-user', ['uses' => 'AuthController@login']);

route::get('login', ['uses' => 'AuthController@checkLogin']);
route::get('logout', ['uses' => 'AuthController@logout']);

route::get('create-product', ['uses'=> 'SanPhamController@create']);
route::post('save-product', ['uses' => 'SanPhamController@save']);
route::get('view-product', ['uses'=> 'SanPhamController@viewProduct']);
route::get('/edit-product/{id}', ['uses' => 'SanPhamController@getProduct']);

route::get('nhapdiem', function(){
    return view('postForm');
})->name('nhapdiem');

route::get('loi', function(){
    echo 'duong turong nhat';
})->name('loi');

route::get('diem', function(){
    echo 'da co diem';
})->middleware('myMiddle')->name('diem');