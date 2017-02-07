@extends('layouts.app')

@section('css')@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-heading">Client List
                        <a href="{{ route('admin.client.create') }}">
                            <button class="btn btn-primary">Add New Client</button>
                        </a>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Google API to search location -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU-draiV5RIPiQY_7xmuCmToSE3aFG7mk&v=3.exp&libraries=places"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            var options = {};
            var input = document.getElementById('address');
            var autocomplete = new google.maps.places.Autocomplete(input, options);
        });
    </script>
@endsection