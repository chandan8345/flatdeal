<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class errorController extends Controller
{
    public function notfound()
    {
        return view('error.404');
    }
    public function fatal()
    {
        return view('error.500');
    } 
}
