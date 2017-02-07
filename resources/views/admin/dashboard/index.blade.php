@extends('layouts.app')

@section('css')@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-heading">Client List
                        <a href="{{ route('admin.client.index') }}">
                            <button class="btn btn-primary">Client List</button>
                        </a>
                    </div>

                    <div class="panel-body">
                        This is form
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js') @include('admin.client.partials.script') @endsection