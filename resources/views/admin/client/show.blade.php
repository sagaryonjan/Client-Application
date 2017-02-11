@extends('layouts.app')

@section('css')
    <style>
        .margin {
            float: right!important;
            margin-top: -7px;
            margin-left: 10px;
        }
    </style>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-heading">Add New Client
                        <a href="{{ AppHelper::getAdminRoute($scope.'.create') }}">
                            <button class="btn btn-primary margin">Add New Client</button>
                        </a>

                        <a href="{{ AppHelper::getAdminRoute($scope.'.edit', $data['row']->id) }}">
                            <button class="btn btn-primary margin">Edit Client</button>
                        </a>
                        <a href="{{ AppHelper::getAdminRoute($scope.'.index') }}">
                            <button class="btn btn-primary margin">Client List</button>
                        </a>
                    </div>

                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>Name :</dt>
                            <dd>{{ $data['row']->name }}</dd>
                            <dt>Email :</dt>
                            <dd>{{ $data['row']->email }}</dd>
                            <dt>Phone :</dt>
                            <dd>{{ $data['row']->phone }}</dd>
                            <dt>Date of Birth :</dt>
                            <dd>{{ $data['row']->birth_date }}</dd>
                            <dt>Address :</dt>
                            <dd>{{ $data['row']->address }}</dd>
                            <dt>Nationality :</dt>
                            <dd>{{ $data['row']->nationality }}</dd>
                            <dt>Gender :</dt>
                            <dd>{{ $data['row']->gender }}</dd>
                            <dt>Prefer Mode :</dt>
                            <dd>{{ $data['row']->prefer_contact }}</dd>
                            <dt>Education Background :</dt>
                            <dd>{{ $data['row']->education_background }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js') @endsection
