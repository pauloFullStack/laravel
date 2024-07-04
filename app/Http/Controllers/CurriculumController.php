<?php

namespace App\Http\Controllers;

class CurriculumController extends Controller
{


    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('curriculum');
    }
}
