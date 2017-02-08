<?php

namespace App\Http\Controllers;

use App\Client;

class HomeController extends Controller
{
    /**
     * Show the view for home
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

        return view('home', compact('clients'));
    }

}
