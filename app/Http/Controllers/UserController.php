<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = UserModel::all();
        return view('userpage',['data'=>$user]);
    }

    public function insert(){
        $data = [
            'level_id' => '1',
            'username' => 'laravel',
            'nama' => 'Laravel Model',
            'password' => Hash::make('12345')
        ];
        UserModel::insert($data);
        
        $user = UserModel::all();
        return view('userpage',['data'=>$user]);
    }

    public function update(){
        $data = [
            'nama' => 'John Laravel'
        ];
        UserModel::where('username','Laravel')->update($data);

        $user = UserModel::all();
        return view('userpage',['data'=>$user]);
    }

    public function delete(){
        UserModel::where('username','Velva Reichert')->delete();

        $user = UserModel::all();
        return view('userpage',['data'=>$user]);
    }

}
