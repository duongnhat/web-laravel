<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function login(Request $request){
        $name = $request['name'];
        $password = $request['password'];
        if(Auth::attempt(['full_name'=>$name,'password'=>$password, 'kichhoat'=>'checked'])){
            $dulieu = ['data'=>Auth::user()];
            return view('user.profile', $dulieu);
        }else{
            echo 'Tên đăng nhập hay mật khẩu không chính xác, hoặc tài khoản chưa được kích hoạt.';
        }
    }
    
    public function checkLogin(){
        if(Auth::check()){
            echo 'Bạn chưa đăng xuất.';
            return view('user.profile', ['data'=>Auth::user()]);
        }else{
            return view('user.login');
        }
    }

        public function logout(){
        Auth::logout();
        return view('user.login');
    }
    
    public function profile($id){
        $data = user::where('id', 'like', $id)->first();
        $dulieu['data'] = $data;
        if(Auth::check() && Auth::user()->admin == 'checked'){
            return view('user.admin', $dulieu);
        }else{
            echo 'Bạn không được quyền xem thông tin này.';
        }
        
    }
}
