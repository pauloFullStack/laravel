<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitePhpGoldController extends Controller
{
    /**
     * Carregar pagina web.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site-phpgold');
    }
}
