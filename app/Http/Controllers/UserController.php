<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;

class UserController extends BaseController {

    public function listUser() {
        $data = User::all();
        $dulieu['data'] = $data;
        return view('user.list-user', $dulieu);
    }

    public function edit() {
        return view('user.edit');
    } 

    public function save(Request $request) {
        $data = $request->all();
        $user = new User();
        $user->full_name = $data['full_name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->remember_token = $data['remember_token'];
        $user->save();
        return redirect('create-user');
    }

    public function create() {
        return view('user.create');
    }

}
