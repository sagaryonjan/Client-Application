<?php

namespace App\Http\Controllers\Admin;

class ClientController extends AdminBaseController
{

    /**
     * Show the client list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.client.index');
    }

    /**
     * Show the view for adding client.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }
}
