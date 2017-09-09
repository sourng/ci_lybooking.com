<!--Banner-->
<?php include_once 'inc/banner.php'; ?>
        <!--End Banner-->
 <!-- Sales -->
       <?php 

       include_once 'inc/v_hotsale.php'; 
       //include_once 'js/hotels.php';
       ?>
        <!-- End Sales -->


       <!-- Travel Destinations -->
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
                                    <li class="active">
                                        <a data-toggle="tab" href="#destinations-1"><i class="fa fa-map-marker"></i> Recommendation for you</a>
                                    </li>
                                  <!--   <li>
                                        <a data-toggle="tab" href="#destinations-2"><i class="fa fa-map-marker"></i> Australia &amp; Oceania</a>
                                    </li>
                                    -->
                                </ul>
                            </div>

                        </div>
                        <!-- End Destinations Filter -->
                        
                        <!-- Destinations Grid -->
                        <div class="col-md-8 col-lg-9">
                            <div class="tab-content destinations-grid">
                                <!-- Tab One -->
                                <div id='destination-grid' id="destinations-1" class="clearfix tab-pane fade active in ">
                                    <!-- Destinations Item -->
                                    <div  class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item ">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">London - UK</a>
                                                </div>
                                                <span class="properties-nb">
                                                    <ins>1289</ins> properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url();?>uploads/hotels/images/destinations/img-1.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                   
                                </div>
                                <!-- End Tab One -->
                                <!-- Tab Two -->
                                <div id="destinations-2" class="clearfix tab-pane fade">
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item ">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">London - UK</a>
                                                </div>
                                                <span class="properties-nb">
                                                    <ins>1289</ins> properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url();?>uploads/hotels/images/destinations/angkor-attic-villa-1.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Paris - France</a>
                                                </div>
                                                <span class="properties-nb">
                                                    239 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url();?>uploads/hotels/images/destinations/angkor-attic-villa-2.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Rome - Italy</a>
                                                </div>
                                                <span class="properties-nb">
                                                    478 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url();?>uploads/hotels/images/destinations/img-3.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Barcelona - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    452 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url();?>uploads/hotels/images/destinations/img-4.jpg" alt="">uploads
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Madrid - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    794 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url();?>uploads/hotels/images/destinations/img-5.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Vienna - Austria</a>
                                                </div>
                                                <span class="properties-nb">
                                                    1289 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url();?>uploads/hotels/images/destinations/img-6.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->



                                </div>
                                <!-- End Tab Two -->
                            </div>
                        </div>
                        <!-- ENd Destinations Grid -->
                    </div>
                </div>
            </div>
            <!-- End Destinations Content -->
        </section>
        <!-- End Travel Destinations -->

       


        <!-- Travel Magazine -->
        
       <?php //include_once 'v_travel_magazine.php'; ?>
        <!-- End Travel Magazine -->
        
        <!-- Confidence and Subscribe  -->
        <section class="confidence-subscribe">
            <!-- Background -->
            <div class="bg-parallax bg-3"></div>
            <!-- End Background -->
            <div class="container">
                <div class="row cs-sb-cn">

                    <!-- Confidence -->
                    <div class="col-md-6">
                        <div class="confidence">
                            <h3>Book with confidence</h3>
                            <ul>
                                <li>
                                    <span class="label-nb">01</span>
                                    <h5>No booking charges</h5>
                                    <p>We don't charge you an extra fee for booking a hotel room with us</p>
                                </li>
                                <li>
                                    <span class="label-nb">02</span>
                                    <h5>No cancellation fees</h5>
                                    <p>We don't charge you a cancellation or modification fee in case plans change</p>
                                </li>
                                <li>
                                    <span class="label-nb">03</span>
                                    <h5>Instant confirmation</h5>
                                    <p>Instant booking confirmation whether booking online or via the telephone</p>
                                </li>
                                <li>
                                    <span class="label-nb">04</span>
                                    <h5>Flexible booking</h5>
                                    <p>You can book up to a whole year in advance until the moment of your stay</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Confidence -->
                    <!-- Subscribe -->
                    <div class="col-md-6">
                        <div class="subscribe">
                            <h3>Subscribe to our newsletter</h3>
                            <p>Enter your email address and we’ll send you our regular promotional emails, packed with special offers, great deals, and huge discounts</p>
                            <!-- Subscribe Form -->
                            <div class="subscribe-form">
                                <form action="#" method="get">
                                    <input type="text" name="" value="" placeholder="Your email" class="subscribe-input">
                                    <button type="submit" class="awe-btn awe-btn-5 arrow-right text-uppercase awe-btn-lager">subcrible</button>
                                </form>
                            </div>
                            <!-- End Subscribe Form -->
                            <!-- Follow us -->
                            <div class="follow-us">
                                <h4>Follow us</h4>
                                <div class="follow-group">
                                    <a href="" title=""><i class="fa fa-facebook"></i></a>
                                    <a href="" title=""><i class="fa fa-twitter"></i></a>
                                    <a href="" title=""><i class="fa fa-pinterest"></i></a>
                                    <a href="" title=""><i class="fa fa-linkedin"></i></a>
                                    <a href="" title=""><i class="fa fa-instagram"></i></a>
                                    <a href="" title=""><i class="fa fa-google-plus"></i></a>
                                    <a href="" title=""><i class="fa fa-digg"></i></a>
                                </div>
                            </div>
                            <!-- Follow us -->
                        </div>
                    </div>
                    <!-- End Subscribe -->

                </div>
            </div>
        </section>
        <!-- End Confidence and Subscribe  -->