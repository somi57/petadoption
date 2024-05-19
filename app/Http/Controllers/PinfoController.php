<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinfo;

class PinfoController extends Controller
{
    // Show Form 
    public function create() {
        return view('pinfo');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'dob' => 'required|date',
        ]);

        $pinfo = new Pinfo(); // create new row/item
        $pinfo->name = $request->name;
        $pinfo->age = $request->age;
        $pinfo->dob = $request->dob;

        $pinfo->save();
        return redirect()->route('pinfo.create')->with('success', 'Form added successfully!');
    }
}
