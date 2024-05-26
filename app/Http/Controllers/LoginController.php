<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function create(){
        return view('login');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required|string',
        ]);
        $login = new Login();
        $login->username = $request->username;
        $login->password = $request->password;
        
        $login->save();
         return redirect()->route('login.create')->with('Success');
    }
        
}

