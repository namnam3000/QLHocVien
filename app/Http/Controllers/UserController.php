<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.user.list',compact('user'));
    }
    public function create(){
        return view('admin.user.add');
    }
    public function store(Request $request){
        $data = $request->all();
        User::create($data);
        return redirect('admin/user/list');
    }
    public function edit($id){
        $user = User::find($id);
        return view('admin/user/add',compact('user'));
    }
    public function update(Request $request, $id){
        $data = $request->all();
        User::update($data);
        return redirect('admin/user/list');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/list');
    }
}
