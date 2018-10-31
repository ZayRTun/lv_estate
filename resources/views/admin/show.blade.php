@extends('layouts.admin_master')

@section('content')
    {{--{{ dd($property->images()->get()) }}--}}
    <div class="container main">
        <div class="row">
            <section class="col-sm-8">
                <div class="thumbnail">
                    <div class="carousel slide" id="featured">

                        <lo class="carousel-indicators">
                            @php $active = false; $i = 0; @endphp
                            @foreach($property->images()->get() as $image)
                                @php $i++; @endphp
                                @if(! $active)
                                    @php $active = true; @endphp
                                        <li data-target="#featured" data-slide-to="{{ $i }}" class="active"></li>
                                @else
                                    <li data-target="#featured" data-slide-to="1"></li>
                                @endif
                            @endforeach
                        </lo>

                        <div class="carousel-inner">
                            @php $active = false; @endphp
                            @foreach($property->images()->get() as $image)
                                @if(! $active)
                                    @php $active = true; @endphp
                                    <div class="item active">
                                        <div class="thumbnail" style="background-image: url(/storage/uploads/{{ $image->property_images }})">
                                            <img class="img-responsive center-block" src="/storage/uploads/{{ $image->property_images }}" alt="house_3b_1.jpg">
                                        </div>
                                        {{--<img class="img-responsive" src="/storage/uploads/{{ $image->property_images }}" alt="{{ $image->property_images }}">--}}
                                    </div>
                                @else
                                    <div class="item">
                                        <div class="thumbnail" style="background-image: url(/storage/uploads/{{ $image->property_images }})">
                                            <img class="img-responsive center-block" src="/storage/uploads/{{ $image->property_images }}" alt="house_3b_1.jpg">
                                        </div>
                                        {{--<img class="img-responsive" src="/storage/uploads/{{ $image->property_images }}" alt="{{ $image->property_images }}">--}}
                                    </div>
                                @endif
                            @endforeach
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