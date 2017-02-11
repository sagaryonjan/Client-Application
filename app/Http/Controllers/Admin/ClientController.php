<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Requests\Client\AddFormValidation;
use Response;

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
        $data = [];
        $data['row'] = Client::select('id', 'name', 'gender', 'birth_date', 'phone', 'email', 'address',
            'prefer_contact')->paginate(10);

        return view(parent::loadDataToView($this->base_path.'index'), compact('data'));
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

        Client::create($this->getArrayDataFromRequest($request));

        $fp = fopen(public_path().'/file/client_list.csv', "a");
        $this->fputcsv_eol($fp, $this->getArrayDataFromRequest($request));
        fclose($fp);

      return redirect()->route($this->base_path.'index');
    }

    private function getArrayDataFromRequest($request){

           return [
                'name'                   => $request->get('name'),
                'gender'                 => $request->get('gender'),
                'phone'                  => $request->get('phone'),
                'email'                  => $request->get('email') ,
                'address'                => $request->get('address'),
                'nationality'            => $request->get('nationality'),
                'birth_date'             => $request->get('birth_date'),
                'educational_background' => $request->get('education_background'),
                'prefer_contact'         => $request->get('prefer_contact'),
           ];

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
