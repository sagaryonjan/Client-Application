@extends('layouts.app')

@section('css')
    <style>
        .margin {
            float: right!important;
            margin-top: -7px;
        }
    </style>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if (session()->has('message'))
                    {!! session()->get('message') !!}
                @endif
                <div class="panel panel-default">

                    <div class="panel-heading">Client List
                        <a href="{{ AppHelper::getAdminRoute($scope.'.download_csv') }}" class="btn btn-primary">
                            Export as CSV</a>
                        <a href="{{ AppHelper::getAdminRoute($scope.'.create') }}" class="btn btn-primary margin">
                            Add New Client</a>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>

                            </thead>

                            <tbody>
                            @foreach($clients as $client)
                            <tr>
                                <th scope="row">{{ $client->id }}</th>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ AppHelper::formatDate('M-d-Y', $client->birth_date) }}</td>
                                <td>{{ $client->gender }}</td>
                                <td>
                                    <a href="{{ AppHelper::getAdminRoute($scope.'.show', $client->id) }}"
                                       class="btn btn-primary">Show</a>
                                    <a href="{{ AppHelper::getAdminRoute($scope.'.edit', $client->id) }}"
                                       class="btn btn-success">Edit</a>
                                    <a href="{{ AppHelper::getAdminRoute($scope.'.delete', $client->id) }}"
                                       class="btn btn-danger" onclick="return confirm('Are You Sure??')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                        {!! $clients->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js') @endsection