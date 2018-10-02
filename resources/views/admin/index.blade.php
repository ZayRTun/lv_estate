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
                                    <td>{{ $property->full_name }}</td>
                                    <td>{{ $property->contact }}</td>
                                    <td>{{ $property->property_type }}</td>
                                    <td>{{ $property->property_for }}</td>
                                    <td>{{ $property->prop_area }}</td>
                                    <td>{{ $property->township }}</td>
                                    <td>{{ $property->state }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td><a href="/admin/{{ $property->id }}">View</a></td>
                                    <td><a href="/admin/{{ $property->id }}/edit">Edit</a></td>
                                    <td><a href="/admin/{{ $property->id }}/delete">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection