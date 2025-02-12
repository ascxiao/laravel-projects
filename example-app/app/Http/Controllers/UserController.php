<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Handling POST Request

    public function submitForm(Request $request) {
        return response() -> json([
            'message' => 'Form submitted successfully',
            'data' => $request->all()
        ]);
    }
}
