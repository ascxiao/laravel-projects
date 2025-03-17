<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Features;


class PageController extends Controller
{
    public function features(){
        $features = Features::all();
        return view('pages/features', compact('features'));
    }
}