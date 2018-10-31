@extends('layouts.admin_master')

@section('content')
    <div class="container main">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <section class="col-xs-12">
                {{--<a href="/realestate/public/staff/index.php">&laquo; Back to List</a>--}}

                <form action="/admin" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label  for="firstName">First Name</label>
                            <input type="text" name="first_name"  id="firstName" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label  for="lastName">Last Name</label>
                            <input type="text" name="last_name"  id="lastName" class="form-control" value="">
                        </div>

                        <div class="custom-inline">

                            <div class="col-xs-6 inline">
                                <div class="form-group">
                                    <label  for="propertyFor">Property For</label>
                                    <select name="property_for" class="form-control" id="propertyFor">
                                        @foreach($prop->prop_for as $for)
                                            <option value="{{ $for }}">{{ $for }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-6 inline">
                                <div class="form-group">
                                    <label  for="contact">Phone</label>
                                    <input type="text" name="contact"  id="contact" class="form-control" value="">
                                </div>
                            </div>

                        </div> {{--/custom-inline--}}

                        <div class="custom-inline">

                            <div class="col-xs-6 inline">
                                <div class="form-group">
                                    <label  for="propertyType">Property Type</label>
                                    <select name="property_type" class="form-control" id="propertyType">
                                        @foreach($prop->prop_type as $type)
                                            <option value="{{ $type }}">{{ $type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-6 inline">
                                <div class="form-group">
                                    <label  for="developer">Developer</label>
                                    <input type="text" name="developer"  id="developer" class="form-control" value="">
                                </div>
                            </div>
                        </div> {{--/custom-inline--}}

                        <div class="custom-inline">

                            <div class="col-xs-6 inline">
                                <div class="form-group">
                                    <label  for="bed_room">Bed Rooms</label>
                                    <input type="text" name="bed_room"  id="bed_room" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-xs-6 inline">
                                <div class="form-group">
                                    <label  for="bath_room">Bath Rooms</label>
                                    <input type="text" name="bath_room"  id="bath_room" class="form-control" value="">
                                </div>
                            </div>

                        </div> {{--/custom-inline--}}

                        <div class="custom-inline">

                            <div class="col-xs-6 inline">
                                <div class="form-group">
                                    <label  for="air_conditioning">Air Conditions</label>
                                    <input type="text" name="air_conditioning"  id="air_conditioning" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-xs-6 inline">
                                <div class="form-group">
                                    <label  for="condition">Property Condition</label>
                                    <select name="condition" class="form-control" id="condition">
                                        @foreach($prop->property_conditions as $conds)
                                            @if($conds === 'Good')
                                            <option value="{{ $conds }}" selected>{{ $conds }}</option>
                                            @else
                                            <option value="{{ $conds }}">{{ $conds }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div> {{--/custom-inline--}}

                        <div class="custom-inline">

                            <div class="col-xs-6 inline">
                                <div class="form-group">
                                    <label  for="width">Width</label>
                                    <input type="text" name="width"  id="width" class="form-control" value="0">
                                </div>
                            </div>

                            <div class="col-xs-6 inline">
                                <div class="form-group">
                                    <label  for="length">Length</label>
                                    <input type="text" name="length"  id="length" class="form-control" value="0">
                                </div>
                            </div>
                        </div> {{--/custom-inline--}}

                    </div> {{--/col-sm-6--}}

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label  for="floor">Floor</label>
                            <input type="text" name="floor"  id="floor" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label  for="address">Address</label>
                            <input type="text" name="address"  id="address" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label  for="township">Township</label>
                            <select name="township" class="form-control" id="township">
                                @foreach($prop->township_names as $tsp)
                                    <option value="{{ $tsp }}">{{ $tsp }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label  for="state">State</label>
                            <input type="text" name="state"  id="state" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label  for="price">Price</label>
                            <input type="text" name="price"  id="price" class="form-control" value="0">
                        </div>

                        <div class="form-group">
                            <label  for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="5" cols="50"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="filename">Upload Image:</label>
                            <input type="file" name="property_images[]" id="filename" multiple>
                        </div>


                    </div> {{--/col-sm-6--}}

                    <div class="col-xs-12">
                        <input class="btn btn-primary btn-block" type="submit"/>
                    </div>

                </form>

            </section>
        </div><!-- row -->
    </div><!-- content container -->

@endsection

