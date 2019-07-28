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
}
