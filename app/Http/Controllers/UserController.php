<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;

class UserController extends BaseController {

    public function listUser() {
        $data = User::paginate(5);
        $dulieu['data'] = $data;
        return view('user.list-user', $dulieu);
    }

    public function save(Request $request) {
        $data = $request->all();
        if(isset($data['full_name']) && isset($data['email'])){
            if(isset($data['id'])){
                $user1 = User::find($data['id']);
                $user1->full_name = $data['full_name'];
                $user1->email = $data['email'];
                $user1->sex = $data['sex'];
                if(isset($data['kichhoat'])){
                    $user1->kichhoat = $data['kichhoat'];
                }else{
                    $user1->kichhoat = '';
                }
                if(isset($data['birthday'])){
                    $user1->birthday = $data['birthday'];
                }
                
                if(isset($data['password'])){
                    $user1->password = bcrypt($data['password']);
                }
            }else{
                $user1 = new User();
                $user1->full_name = $data['full_name'];
                $user1->email = $data['email'];
                $user1->password = bcrypt($data['password']);
            }
            if($request->hasFile('photo')){
                $file = $request->file('photo');
                if($file->getClientOriginalExtension() == 'png' || $file->getClientOriginalExtension() == 'jpg'){
                    $nameImage = $data['id'].$file->getClientOriginalName();
                    $file->move('upfile', $nameImage);
                    $user1->avata = $nameImage;
                }else{
                    echo 'Định dạng ảnh không phù hợp.';
                }
            }
        }
        
        
        if(isset($data['password'])){
            if($data['password']===$data['re-enter-password']){
                $user1->save();
                echo "<div class='alert alert-primary' role='alert'> Thành công </div>";
                return redirect('view-user');
            }else{
                echo 'Password không trùng khớp.';
            }
        }else{
            $user1->save();
            return redirect('view-user');
        }
        
    } 


    public function create() {
        return view('user.create');
    }
    
    
    public function getUser($id) {
        $data = user::where('id', $id)->first();
        if($data->sex == 'male'){
            $data->male = 'checked';
            $data->female = '';
        }elseif ($data->sex == '') {
            $data->male = $data->female = '';
        }else{
            $data->male = '';
            $data->female = 'checked';
        }
        $dulieu['data'] = $data;
        return view('user.edit', $dulieu);
    }
    
    

}
