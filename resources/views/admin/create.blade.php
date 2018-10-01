@extends('layouts.admin_master')

@section('content')
    <div class="container main">
        <div class="row">
            <section class="col-xs-12">
                {{--<a href="/realestate/public/staff/index.php">&laquo; Back to List</a>--}}

                <form action="/property/create" method="post" {{--enctype="multipart/form-data"--}}>
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
                                        <option value="For Rent" >For Rent</option>
                                        <option value="For Sale" >For Sale</option>
                                        <option value="For Rent or Sale" >For Rent or Sale</option>
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
                                        <option value="Condominium" >Condominium</option>
                                        <option value="Mini-Condominium" >Mini-Condominium</option>
                                        <option value="Apartment" >Apartment</option>
                                        <option value="Flat" >Flat</option>
                                        <option value="Bungalow" >Bungalow</option>
                                        <option value="Land" >Land</option>
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
                                        <option value="1" >Average</option>
                                        <option value="2" >Decent</option>
                                        <option value="3" selected>Good</option>
                                        <option value="4" >Great</option>
                                        <option value="5" >Like New</option>
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
                                <option value="1" >Bahan</option>
                                <option value="2" >Dagon</option>
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

                    </div> {{--/col-sm-6--}}

                    <div class="col-xs-12">
                        <input class="btn btn-primary btn-block" type="submit" value="Create Property" name="upload"/>
                    </div>

                </form>

            </section>
        </div><!-- row -->
    </div><!-- content container -->

@endsection

