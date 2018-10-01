@extends('layouts.master')

@section('content')
<div class="container carousel-container">

    <div class="row">
        <section class="col-xs-12">

            <h3 class="carousel-header">Latest Postings</h3>

            <div class="carousel slide main_slide" id="featured" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active" >
                        {{--<a href="details.php?id=33">--}}
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="thumbnail" style="background-image: url(/realestate/public/uploaded/house_3b_1.jpg)">
                                    <img class="img-responsive center-block" src="/realestate/public/uploaded/house_3b_1.jpg" alt="house_3b_1.jpg">
                                </div>
                            </div>
                            <div class="col-sm-4 hidden-xs">
                                <h3>Condominium</h3>
                                <p>For For Rent</p>
                                <p>asdf</p>
                                <p>Bahan</p>
                                <p>560.00</p>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!-- end of if else -->


                    <div class="item" >
                        <a href="details.php?id=34">

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="thumbnail" style="background-image: url(/realestate/public/uploaded/house_2b_2.jpg)">
                                        <img class="img-responsive center-block" src="/realestate/public/uploaded/house_2b_2.jpg" alt="house_2b_2.jpg">
                                    </div>
                                </div>
                                <div class="caption col-sm-4 hidden-xs">
                                    <h3>Condominium</h3>
                                    <p>For For Sale</p>
                                    <p>assff</p>
                                    <p>Bahan</p>
                                    <p>600.00</p>
                                </div>
                            </div>

                        </a>
                    </div>

                    <!-- end of if else -->

                </div> <!--carousel-inner-->

                <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#featured" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>

            </div> <!--Carousel-->
        </section>
    </div> <!--end of row-->
</div> <!-- carousel -->

<!--tab-content-->
<div class="container-fluid content-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3>Listings</h3>

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a role="tab" data-toggle="tab" href="#rent">For Rent</a>
                    </li>
                    <li role="presentation">
                        <a role="tab" data-toggle="tab" href="#sale">For Sale</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="rent">
                        <div class="row">
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=19">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_1a.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Condominium</h3>
                                            <p>For Rent or Sale</p>
                                            <p>Bahan</p>
                                            <p>Price : 700.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=20">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_2a.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Mini-Condominium</h3>
                                            <p>For Rent</p>
                                            <p>Pazundaung</p>
                                            <p>Price : 244.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=22">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_7.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Apartment</h3>
                                            <p>For Rent</p>
                                            <p>Dagon Seikkan</p>
                                            <p>Price : 450.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=24">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_4_1.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Mini-Condominium</h3>
                                            <p>For Rent</p>
                                            <p>Hlaing</p>
                                            <p>Price : 550.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=25">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_6_1.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Condominium</h3>
                                            <p>For Rent</p>
                                            <p>Bahan</p>
                                            <p>Price : 900.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=26">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_2a_1.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Condominium</h3>
                                            <p>For Rent</p>
                                            <p>Bahan</p>
                                            <p>Price : 445.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=31">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_3b.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Condominium</h3>
                                            <p>For Rent</p>
                                            <p>Bahan</p>
                                            <p>Price : 6345.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=33">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_3b_1.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Condominium</h3>
                                            <p>For Rent</p>
                                            <p>Bahan</p>
                                            <p>Price : 560.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <div class="col-xs-12">
                                <a class="btn btn-success" href="#">View All Properties For Rent</a>
                                <hr>
                            </div>

                        </div>


                    </div> <!-- tab-pane -->
                    <div class="tab-pane" role="tabpanel" id="sale">

                        <div class="row">

                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=19">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_1a.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Condominium</h3>
                                            <p>For Rent or Sale</p>
                                            <p>Bahan</p>
                                            <p>Price : 700.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=21">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_1a_1.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Apartment</h3>
                                            <p>For Sale</p>
                                            <p>Insein</p>
                                            <p>Price : 400.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=23">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_3a.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Mini-Condominium</h3>
                                            <p>For Sale</p>
                                            <p>Kamayut</p>
                                            <p>Price : 340.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=27">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_4_3.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Mini-Condominium</h3>
                                            <p>For Sale</p>
                                            <p>Insein</p>
                                            <p>Price : 540.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=28">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_2b_1.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Bungalow</h3>
                                            <p>For Sale</p>
                                            <p>Hlaing</p>
                                            <p>Price : 1200.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=29">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_5.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Condominium</h3>
                                            <p>For Sale</p>
                                            <p>Bahan</p>
                                            <p>Price : 700.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=30">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_4_4.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Condominium</h3>
                                            <p>For Sale</p>
                                            <p>Bahan</p>
                                            <p>Price : 434.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=32">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_7_2.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Condominium</h3>
                                            <p>For Sale</p>
                                            <p>Bahan</p>
                                            <p>Price : 566.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <section class="col-xs-12 col-sm-4 col-md-3">
                                <a href="details.php?id=34">
                                    <div class="thumb">
                                        <div class="img" style="background-image: url(/realestate/public/uploaded/house_2b_2.jpg)">
                                        </div>
                                        <div class="thumb-cont">
                                            <h3>Condominium</h3>
                                            <p>For Sale</p>
                                            <p>Bahan</p>
                                            <p>Price : 600.00</p>
                                        </div>
                                    </div>
                                </a>
                            </section>
                            <div class="col-xs-12">
                                <a class="btn btn-success" href="#">View All Properties For Sale</a>
                                <hr>
                            </div>

                        </div>
                    </div> <!-- tab-pane -->
                </div> <!-- tab-content -->
            </div> <!-- col-xs-12 -->
        </div> <!--end of row-->
    </div> <!--container-->
</div> <!--tab-content-->
@endsection