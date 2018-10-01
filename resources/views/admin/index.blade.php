@extends('layouts.admin_master')

@section('content')

    <div class="container main">
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Property Type</th>
                                <th>Property For</th>
                                <th>Area</th>
                                <th>Township</th>
                                <th>State</th>
                                <th>Price</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($properties as $property)
                                <tr>
                                    <td>{{ $property->first_name . ' ' . $property->last_name }}</td>
                                    <td>{{ $property->contact }}</td>
                                    <td>{{ $property->property_type }}</td>
                                    <td>{{ $property->property_for }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection