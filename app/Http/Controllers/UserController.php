<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }


    public function create()
    {
        return view('user.create');
    }


    public function list()
    {
        $users = User::all();
        return view('user.list', compact('users'));
    }


    public function edit($user_id=null)
    {
        if($user_id > 0){
            $user = User::where('id', $user_id)->first();
            return view('user.edit', compact('user'));
        }
    }


    public function store(Request $request)
    {
        $id = $request->id;
        if($id > 0){
            $user = User::where('id', $request->id)->first();
            $user->access = $request->access;
            $user->confirmed = $request->confirmed;
            $user->update();
        }else{
            $user = new User();
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->password = Hash::make($request->password);
            $user->access = $request->access;
            $user->confirmed = $request->confirmed;
            $user->save();
        }
        return $user;
    }


    public function delete($user_id=null)
    {
        if($user_id > 0){
            User::destroy($user_id);
        }
    }
    
}
