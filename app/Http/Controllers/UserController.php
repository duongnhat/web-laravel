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

    public function edit(Request $request) {
        $data = $request->all();
        $user1 = new User();
        $user1 = User::find($data['id']);
        $user1->full_name = $data['full_name'];
        $user1->email = $data['email'];
        $user1->password = $data['password'];
        $user1->remember_token = $data['remember_token'];
        $user1->save();
        return redirect('view-user');
    } 

    public function save(Request $request) {
        $data = $request->all();
        $user = new User();
        $user->full_name = $data['full_name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->remember_token = $data['remember_token'];
        $user->save();
        return redirect('view-user');
    }

    public function create() {
        return view('user.create');
    }
    
    public function getUser($id) {
        $data = user::where('id', 'like', $id)->first();
        $dulieu['data'] = $data;
        return view('user.edit', $dulieu);
    }

}
