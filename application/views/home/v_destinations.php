  <section class="destinations">

            <!-- Title -->
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2>Top Travel Destinations</h2>
                    </div>
                    <a href="#" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view all</a>
                </div>
            </div>
            <!-- End Title -->

            <!-- Destinations Content -->
            <div class="destinations-cn">

                <!-- Background -->
                <div class="bg-parallax bg-2"></div>
                <!-- End Background -->

                <div class="container">
                    <div class="row">
                        <!-- Destinations Filter -->
                        <div class="col-md-4 col-lg-3" style="background-color: rgb(11,90,109,0.8);">
                            <div class="intro-filter">
                                <div class="intro">
                                    <p>
                                        <small>Discover</small><br>
                                        <span>
                                        <?php 
                                        echo $dest_count;  
                                        ?></span> destinations
                                    </p>
                                    <p>
                                        <small>With</small><br>
                                        <span><?php echo $hotel_count; ?></span> properties
                                    </p>
                                </div>
                                <ul id='destination-row' class="filter" >
                                    <!--   <li class="active">
                                        <a data-toggle="tab" href="#destinations-1"><i class="fa fa-map-marker"></i> Recommendation for you</a>
                                    </li>
                                  <li>
                                        <a data-toggle="tab" href="#destinations-2"><i class="fa fa-map-marker"></i> Australia &amp; Oceania</a>
                                    </li>
                                    -->
                                </ul>
                            </div>

                        </div>
                        <!-- End Destinations Filter -->
                        <!-- Destinations Grid -->
                     

                      <!-- Destinations Grid -->
                        <div class="col-md-8 col-lg-9">
                            <div class="tab-content destinations-grid">
                                <!-- Tab One -->
                                <div id='destination-grid' id="destinations-1" class="clearfix tab-pane fade active in ">
                                    <!-- Destinations Item -->
                                
                                    <!-- End Destinations Item -->                                   
                                </div>
                                <!-- End Tab One -->
                             
                            </div>
                        </div>
                        <!-- ENd Destinations Grid -->

                        <!-- ENd Destinations Grid -->
                    </div>
                </div>
            </div>
            <!-- End Destinations Content -->
        </section>