<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Client\AddFormValidation;

class ClientController extends AdminBaseController
{

    protected $scope      = 'client';
    protected $base_path = 'admin.client.';

    /**
     * Show the client list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(parent::loadDataToView($this->base_path.'index'));
    }

    /**
     * Show the view for adding client.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(parent::loadDataToView($this->base_path.'create'));
    }

    public function store(AddFormValidation $request){
        dd($request);
    }
}
