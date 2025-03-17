<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //Handling POST Request

    public function submitForm(Request $request) {
        $request-> validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',        
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,        
        ]);

        return response() -> json([
            'message' => 'Form submitted successfully',
            'user'=>$user
        ],201);
    }
}
