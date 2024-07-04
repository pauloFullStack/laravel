<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{


    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('auth.register');
    }
}
