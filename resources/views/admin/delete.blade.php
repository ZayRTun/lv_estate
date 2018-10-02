@extends('layouts.admin_master')

@section('content')

    <div class="container main">
        <div class="row">
            <div class="col-xs-12">
                <a href="/admin">&laquo; Back to List</a>

                <h1>Delete Property</h1>
                <p><strong>Name: </strong>{{ $property->full_name }}</p>
                <p><strong>Property Type: </strong>{{ $property->property_type }}</p>
                <p><strong>For: </strong>{{ $property->property_for }}</p>
                <p><strong>Price: </strong>{{ $property->price}}</p>
                <hr>
                <p>Are you sure you want to delete this property?</p>

                <form action="/admin/{{ $property->id }}" method="post">
                    {{ csrf_field() }}
                    @method('DELETE')

                    <div class="form-group">
                        <input class="btn btn-danger" type="submit" name="commit" value="Delete Property">
                    </div>

                </form>

            </div>
        </div>
    </div>


@endsection