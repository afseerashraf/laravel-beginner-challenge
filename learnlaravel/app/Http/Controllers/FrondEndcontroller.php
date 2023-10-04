<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\ViewServiceProvider;


class FrondEndcontroller extends Controller
{
    public function home(){

        $users = User::withTrashed()->latest()->paginate(10);
        Log::info('Query exicuted');
        session()->put('user_name','afseer');
        session()->put('user_id',001);
        return view('home',compact('users'));


       
       
    }
    public function create(){
       $insert = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'dob' => request('dob'),
            'place' => request('place'),
            'img' => request('image'),
        ]);
        if(request()->hasFile('img')){
            $extension = request('img')->extension();
            return $extension;
        }
        Log::info("Query Exicuted");
        return View('new-user');
    }
    public function userdelete($id){
        $user = User::find(decrypt($id));
        $user->delete();

        return redirect()->route('home')->with('message', 'user delete successfully');
    }

    public function login(){

        return view('login');

    }
    
}
