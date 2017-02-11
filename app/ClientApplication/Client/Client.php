<?php
namespace App\ClientApplication\Client;

use App\Client as ClientModel;

class Client
{

    public $model;

    public function updateCsvFile(){

        $header[] = ['Name', 'Gender', 'Phone', 'Email', 'Address', 'Nationality', 'Birth Date', 'Education Background', 'Prefer Mode'];
        $client_list = ClientModel::get(['name', 'gender', 'phone', 'email', 'address', 'nationality', 'birth_date', 'educational_background', 'prefer_contact'])->toArray();

        $clients = array_merge($header, $client_list);
        $fp = fopen(public_path() . '/file/client_list.csv', "w");
        foreach ($clients as $c){
            fputcsv($fp, $c);
        }
        fclose($fp);

    }

    public function idExist($id)
    {
        $this->model = ClientModel::find($id);

        return $this->model;
    }

    public function getArrayDataFromRequest($request){

        return [
            'name'                   => $request->get('name'),
            'gender'                 => $request->get('gender'),
            'phone'                  => $request->get('phone'),
            'email'                  => $request->get('email') ,
            'address'                => $request->get('address'),
            'nationality'            => $request->get('nationality'),
            'birth_date'             => $request->get('birth_date'),
            'educational_background' => $request->get('educational_background'),
            'prefer_contact'         => $request->get('prefer_contact'),
        ];

    }
}