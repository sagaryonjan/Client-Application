@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Manage Client</div>
                    <div class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-2">
                                    <nav class="nav-sidebar">

                                        <ul class="nav">
                                            <li><a href="{{ AppHelper::getAdminRoute('dashboard') }}">Home</a></li>
                                            <li><a href="{{ AppHelper::getAdminRoute('client.index') }}">Client List</a></li>
                                            <li><a href="{{ AppHelper::getAdminRoute('client.create') }}">Add New Client</a></li>
                                            <li class="nav-divider"></li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>

                                        </ul>

                                    </nav>
                                </div>
                                <div class="col-sm-8">
                                     <h3>Hello {{ AppHelper::getUserName() }}. Here You can manage your client</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')  @endsection