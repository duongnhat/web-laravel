<?php

route::group(['middleware'=> ['web']],function(){
    route::get('/', function(){
        return view('page.trangchu');
    });

    route::post('login-user', ['uses' => 'AuthController@login']);
    route::get('login', ['uses' => 'AuthController@checkLogin']);
    route::get('logout', ['uses' => 'AuthController@logout']);

    route::group(['prefix'=>'admin','middleware'=>'myMiddle'],function()
        {
        route::group(['prefix'=>'tools'],function(){

            route::post('save-news', ['uses' => 'NewsController@save']);
            route::get('create-news', ['uses'=> 'NewsController@create']);

            route::get('list-user', ['uses' => 'UserController@list']);
            route::get('/edit-user/{id}', ['uses' => 'UserController@getUser']);
            route::post('save-user', ['uses' => 'UserController@save']);
            route::get('create-user', ['uses'=> 'UserController@create']);
            route::get('view-user', ['uses'=> 'UserController@listUser']);
            route::post('to-create-user', ['uses' => 'UserController@save']);
            route::get('/view-profile-user/{id}', ['uses'=> 'AuthController@profile']);

            route::get('create-product', ['uses'=> 'SanPhamController@create']);
            route::post('save-product', ['uses' => 'SanPhamController@save']);
            route::get('view-product', ['uses'=> 'SanPhamController@viewProductAdmin']);
            route::get('/edit-product/{id}', ['uses' => 'SanPhamController@getProductAdmin']);
            });
        });



        route::group(['prefix'=>'guest','middleware'=>'guest'],function()
        {
            route::get('sanpham', ['uses'=> 'SanPhamController@viewProductGuest']);
            route::post('capnhatsp', ['uses'=> 'SanPhamController@capNhat']);
            route::get('/chitiet/{id}', ['uses'=> 'sanPhamController@getProductGuest']);
            route::get('/delete/{id}', ['uses'=> 'sanPhamController@delete']);
            route::get('/giohang/{id}', ['uses'=> 'sanPhamController@gioHangThem']);
            route::get('/giohang', ['uses'=> 'sanPhamController@gioHang']);
            route::group(['prefix'=>'tools'],function(){
                route::get('thu',function(){
                    $dm[]='dmcs';
                Session::put('nhat',$dm);
                //echo Session::get('giohang')[8];
                echo Session::get('nhat')[0];
                if(Session::has('giohang')){
                    echo dd(Session::get('giohang'));
                }else{
                    echo 'khongggggg';
                }
            });

            });
        });
    });
    
    



route::get('nhapdiem', function(){
    return view('postForm');
})->name('nhapdiem');

route::get('loi', function(){
    echo 'duong turong nhat';
})->name('loi');

route::get('diem', function(){
    echo 'da co diem';
})->middleware('myMiddle')->name('diem');

