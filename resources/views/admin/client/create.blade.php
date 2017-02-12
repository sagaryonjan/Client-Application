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
                <div class="panel panel-default">

                    <div class="panel-heading">Add New Client
                        <a href="{{ AppHelper::getAdminRoute($scope.'.index') }}">
                            <button class="btn btn-primary margin">Client List</button>
                        </a>
                    </div>

                    <div class="panel-body">
                        <form id="clientForm" action="{{ AppHelper::getAdminRoute($scope.'.store') }}" method="post">
                            {!! csrf_field() !!}
                            @include($view_path.'partials._form')

                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js') @include($view_path.'partials.script') @endsection