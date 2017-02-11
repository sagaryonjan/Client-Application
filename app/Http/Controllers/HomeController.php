<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the view for home
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

}
