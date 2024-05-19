<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;

class RegistrationController extends Controller
{
    public function create() {
        return view('registration');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
        ]);

        $registration = new Registration(); // create new row/item
        $registration->name = $request->name;
        $registration->address = $request->address;
        $registration->email = $request->email;
        $registration->number = $request->number;

        $registration->save();
        return redirect()->route('registration.create')->with('success', 'Form added successfully!');
    }
}
