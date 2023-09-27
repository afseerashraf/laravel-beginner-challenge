<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;

class FrondEndcontroller extends Controller
{
    public function home(){

        $users = User::all();

       
       
        return view('welcome',compact('users'));
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
        
        return View('new-user');
    }
    public function userdelete($id){
        $user = User::find(decrypt($id));
        $user->delete();

        return redirect()->route('home')->with('message', 'user delete successfully');
    }
    
}
