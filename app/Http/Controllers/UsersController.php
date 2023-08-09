<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){
        $users = Users::all()->sortBy('last_name');
        return view('users.index', ['users' => $users  ]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'username' => 'required|unique:users,username',
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required|unique:users,email_address',
            'password' => 'required'   
        ]);

        $newUsers = Users::create($data);

        return redirect(route('users.index'));


    }

    public function edit(Users $user){
        return view('users.edit', ['users' => $user]);
    }

    public function update(Users $user, Request $request){
        $data = $request->validate([
            'username' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required',
            'password' => 'required'  
        ]);

        $user->update($data);
        return redirect(route('users.index'))-> with('success', 'Product Updated');
    }
}
