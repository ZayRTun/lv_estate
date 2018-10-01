<div class="container-fluid content-container">
    <div class="container">
        <div class="row">
            <section class="col-xs-12">
                <!--<h3>Property Search</h3>-->
                <form class="search_form" action="/realestate/public/result.php" method="post">


                    <div class="col-md-2 col-sm-6">
                        <div class="form-group">
                            <label for="propertyType" class="sr-only">Property Type</label>
                            <select name="property[property_type]" class="form-control" id="propertyType">
                                <option value="" selected disabled>Select Property</option>
                                <option value="any">All Property</option>
                                <option value="Condominium">Condominium</option>
                                <option value="Mini-Condominium">Mini-Condominium</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Flat">Flat</option>
                                <option value="Bungalow">Bungalow</option>
                                <option value="Land">Land</option>
                            </select>
                        </div> <!--form-group-->
                    </div> <!-- col-sm-2 -->

                    <div class="col-md-2 col-sm-6">
                        <div class="form-group">
                            <label for="township" class="sr-only">Select Location</label>
                            <select name="property[township]" class="form-control" id="township">
                                <option value="any" selected disabled>Select Location</option>
                                <option value="any">All Location</option>
                                <option value="Ahlon">Ahlon</option>
                                <option value="Bahan">Bahan</option>
                                <option value="Botataung">Botataung</option>
                                <option value="Dagon">Dagon</option>
                                <option value="Dagon Seikkan">Dagon Seikkan</option>
                                <option value="Dala">Dala</option>
                                <option value="Dawbon">Dawbon</option>
                                <option value="East Dagon">East Dagon</option>
                                <option value="Hlaing">Hlaing</option>
                                <option value="Hlaingthaya">Hlaingthaya</option>
                                <option value="Insein">Insein</option>
                                <option value="Kamayut">Kamayut</option>
                                <option value="Kyauktada">Kyauktada</option>
                                <option value="Kyimyindaing">Kyimyindaing</option>
                                <option value="Lanmadaw">Lanmadaw</option>
                                <option value="Latha">Latha</option>
                                <option value="Mayangon">Mayangon</option>
                                <option value="Mingala Taungnyunt">Mingala Taungnyunt</option>
                                <option value="Mingaladon">Mingaladon</option>
                                <option value="North Dagon">North Dagon</option>
                                <option value="North Okkalapa">North Okkalapa</option>
                                <option value="Pabedan">Pabedan</option>
                                <option value="Pazundaung">Pazundaung</option>
                                <option value="Sanchaung">Sanchaung</option>
                                <option value="Seikkyi Kanaungto">Seikkyi Kanaungto</option>
                                <option value="Shwepyitha">Shwepyitha</option>
                                <option value="South Dagon">South Dagon</option>
                                <option value="South Okkalapa">South Okkalapa</option>
                                <option value="Tamwe">Tamwe</option>
                                <option value="Thaketa">Thaketa</option>
                                <option value="Thingangyun">Thingangyun</option>
                                <option value="Yankin">Yankin</option>
                            </select>
                        </div> <!-- form-group -->
                    </div> <!-- col-sm-2 -->

                    <div class="col-md-2 col-sm-6">
                        <div class="form-group">
                            <label for="propertyFor" class="sr-only">Property For</label>
                            <select name="property[property_for]" class="form-control" id="propertyFor">
                                <option value="For Rent" >For Rent</option>
                                <option value="For Sale" >For Sale</option>
                                <option value="For Rent or Sale" >For Rent or Sale</option>
                            </select>
                        </div> <!-- form-group -->
                    </div> <!--col-sm-2-->

                    <div class="col-md-2 col-sm-6">
                        <div class="form-group">
                            <label for="minPrice" class="sr-only">Minimum Price</label>
                            <input class="form-control" type="text" name="property[min_price]" id="minPrice" placeholder="Min Price">
                        </div> <!--form-group-->
                    </div> <!--col-sm-2-->

                    <div class="col-md-2 col-sm-6">
                        <div class="form-group">
                            <label for="maxPrice" class="sr-only">Maximum Price</label>
                            <input class="form-control" type="text" name="property[max_price]" id="maxPrice" placeholder="Max Price">
                        </div> <!--form-group-->
                    </div> <!--col-sm-2-->


                    <div class="col-md-2  col-sm-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" value="Search" name="search"><span class="glyphicon glyphicon-search"></span> Search</button>
                        </div>
                    </div>

                </form>
            </section>
        </div><!-- row -->
    </div><!-- form container -->
</div> <!--container-fluid-->