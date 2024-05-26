<?php

namespace App\Http\Controllers;
use App\Models\Signup;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function create(){
        return view('signup');
    }
    
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
        ]);
        $signup=new Signup();
        $signup->name=$request->name;
        $signup->address=$request->address;
        $signup->age=$request->age;
        $signup->email=$request->email;
        $signup->number=$request->number;
        $signup->password=$request->password;
        $signup->repass=$request->repass;

        $signup->save();
        return redirect()->route('signup.create')->with('Success');

    }
}
