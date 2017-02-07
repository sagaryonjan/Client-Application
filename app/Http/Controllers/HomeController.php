<?php

namespace App\Http\Controllers\Frontend;


use App\Client;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

        return view('frontend.home',compact('clients'));
    }

}
