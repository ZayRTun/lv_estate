@extends('layouts.admin_master')

@section('content')

    <div class="container main">
        <div class="row">
            <section class="col-sm-8">
                <div class="thumbnail">
                    <div class="carousel slide" id="featured">

                        <lo class="carousel-indicators">
                            <li data-target="#featured" data-slide-to="0" class="active"></li>
                            <li data-target="#featured" data-slide-to="1"></li>
                            <li data-target="#featured" data-slide-to="2"></li>
                        </lo>

                        <div class="carousel-inner">

                            <div class="item active">
                                <img class="img-responsive" src="/realestate/public/uploaded/house_1a.jpg" alt="house_1a.jpg">
                            </div>

                            <div class="item">
                                <img class="img-responsive" src="/realestate/public/uploaded/house_2b.jpg" alt="house_2b.jpg">
                            </div>

                            <div class="item">
                                <img class="img-responsive" src="/realestate/public/uploaded/house_4.jpg" alt="house_4.jpg">
                            </div>

                        </div> <!--carousel-inner-->

                        <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#featured" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>

                    </div> <!--carousel-->

                    <!--<img src="" alt="House 1">-->
                    <div class="caption">
                        <h3>Condominium</h3>
                        <p>No description</p>
                        <section class="detail-section">
                            <div class="sec-1">
                                <p><strong>Developer: </strong>{{ $property->developer }}</p>
                                <p><strong>Condition: </strong>{{ $property->condition }}</p>
                                <p><strong>Bed Rooms: </strong>{{ $property->bed_room }}</p>
                                <p><strong>Bath Rooms: </strong>{{ $property->bath_room }}</p>
                                <p><strong>Air-Condition: </strong>{{ $property->air_conditioning }}</p>
                                <p><strong>Floor: </strong>{{ $property->floor }}</p>
                            </div>
                            <div class="sec-2">
                                <p><strong>Area: </strong>{{ $property->prop_area }}</p>
                                <p><strong>Width: </strong>{{ $property->width }}</p>
                                <p><strong>Height: </strong>{{ $property->length }}</p>
                                <p><strong>City/State: </strong>{{ $property->state }}</p>
                                <p><strong>Township: </strong>{{ $property->township }}</p>
                                <p><strong>Address: </strong>{{ $property->address }}</p>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
    </div>


@endsection