<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\ClientApplication\Client\Client as ClientServices;
use App\Http\Requests\Client\FormValidation;
use Response, AppHelper;

class ClientController extends AdminBaseController {

    protected $scope     = 'client';
    protected $base_path = 'admin.client.';
    protected $client;

    public function __construct(ClientServices $client)
    {
       $this->client = $client;
    }

    /**
     * Show the client list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::select('id', 'name', 'gender', 'birth_date', 'phone', 'email', 'address',
            'prefer_contact')->paginate(10);

        return view(parent::loadDataToView($this->base_path.'index'), compact('clients'));
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

    /**
     * Show the view for adding client.
     *
     * @param FormValidation $request
     * @return \Illuminate\Http\Response
     */

    public function store(FormValidation $request){

        Client::create($this->client->getArrayDataFromRequest($request));

        $fp = fopen(public_path().'/file/client_list.csv', "a");
        $this->fputcsv_eol($fp, $this->client->getArrayDataFromRequest($request));
        fclose($fp);

        AppHelper::flash('success', 'Client has been created Successfully');
        return redirect()->route($this->base_path.'index');
    }

    /**
     * Show the view of detail the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        if (!$this->client->idExist($id)) {
            return redirect()->route($this->error_route)->withErrors(['message' => 'Invalid Id']);
        }
        $data = [];
        $data['row'] = $this->client->model;

        return view(parent::loadDataToView($this->base_path.'show'), compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        if (!$this->client->idExist($id)) {
            return redirect()->route($this->error_route)->withErrors(['message' => 'Invalid Id']);
        }

        $data = [];
        $data['row'] = $this->client->model;

        return view(parent::loadDataToView($this->base_path.'edit'), compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FormValidation $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormValidation $request, $id){

        if (!$this->client->idExist($id)) {
            return redirect()->route($this->error_route)->withErrors(['message' => 'Invalid Id']);
        }

        $this->client->model->update($this->client->getArrayDataFromRequest($request));

        if($this->client->model){
            $this->client->updateCsvFile();
        }

        AppHelper::flash('success', 'Client has been updated Successfully');
        return redirect()->route($this->base_path.'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){

        if (!$this->client->idExist($id)) {
            return redirect()->route($this->error_route)->withErrors(['message' => 'Invalid Id']);
        }

        $result = $this->client->model->delete();
        if($result) {
            $this->client->updateCsvFile();
        }

        AppHelper::flash('success', 'Client has been deleted Successfully');
        return redirect()->route($this->base_path.'index');
    }

    public function downloadCvs(){

        $filename = 'client_list.csv';
        $path = public_path().'/file/client_list.csv';

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/csv',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);

    }

}
