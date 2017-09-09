<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo $title; ?></title>
    <!-- Font Google -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7COpen+Sans:300,400,900,400Italic,600italic,600,700' rel='stylesheet' type='text/css'>
    <!-- End Font Google -->
    <!-- Library CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/library/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/library/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/library/jquery-ui.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/css/library/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/library/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/library/magnific-popup.css">
    <!-- End Library CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">


<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>slider_detail/amazingslider-1.css">
    
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="tb-cell">
            <div id="page-loading">
                <div></div>
                <p>Waiting about 2 s</p>
            </div>
        </div>
    </div>
    <!-- Wrap -->
    <div id="wrap">

        <!-- Header -->
         
            <?php 
           //include_once("./inc/header.php"); 
          //  echo $header;
            $this->load->view('inc/header');

            ?>
       
        <!-- End Header -->
    
        <!--Banner-->
        <section class="sub-banner">
            <!--Background-->
            <div class="bg-parallax bg-1"></div>
            <!--End Background-->
            <!-- Logo -->
            <div class="logo-banner text-center">
                <a href="" title="">
                    <img src="<?php echo base_url();?>public/images/logo-banner.png" alt="">
                </a>
            </div>
            <!-- End Logo -->
        </section>
        <!--End Banner-->

        <!-- Main -->
        <div class="main main-dt">
            <div class="container">
                <div class="main-cn bg-white clearfix">

                    <!-- Breakcrumb -->
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i></a></li>
                            <li><a href="<?php echo site_url(); ?>hotels" title="">Hotels</a></li>
                            <li><a href="#" title=""><?php echo $breadcrumb_3; ?> </a></li>
                            <li><?php echo $breadcrumb_4; ?></li>
                        </ul>
                        <div class="support float-right">
                            <small>Got a question?</small> <?php echo $hotelDetail[0]['h_contact_phone']; ?>
                        </div>
                    </section>
                    <!-- End Breakcrumb -->

                    <!-- Header Detail -->
                    <section class="head-detail">
                        <div class="head-dt-cn">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h1><?php echo $hotelDetail[0]['h_name']; ?> </h1>
                                    <div class="start-address">
                                        <span class="star">
                                        <?php //echo $hotelDetail[0]['star_rating'];
                                        if($hotelDetail[0]['star_rating']>0){
                                            for($i=1;$i<=$hotelDetail[0]['star_rating'];$i++){
                                           ?>
                                           <i class="glyphicon glyphicon-star"></i>
                                            <?php
                                            }
                                        }
                                         ?>                                            
                                          <!--   <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i>
                                            <i class="glyphicon glyphicon-star"></i> -->
                                        </span>
                                        <address class="address">
                                            <?php echo $hotelDetail[0]['h_address']; ?>
                                        </address>

                                    </div>
                                </div>
                                <div class="col-sm-5 text-right">
                                    <p class="price-book">
                                        From-<span>$345</span>/night
                                        <a href="" title="" class="awe-btn awe-btn-1 awe-btn-lager">Book Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Header Detail -->

                      <!-- Detail Slide -->
                 <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0 auto;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
            <?php             
                for($i=1;$i<=24;$i++){
                    $img='hg_img'.$i;
                    //echo $img;
                    if(isset($hotelGallery[0][$img])){
                        ?>
                         <li><a href="<?php echo base_url();?>uploads/hotels/<?php echo $hotelGallery[0][$img];?>" class="html5lightbox" data-width="960" data-height="720"><img src="<?php echo base_url();?>uploads/hotels/<?php echo $hotelGallery[0][$img];?>" alt="<?php echo $hotelGallery[0][$img];?>"  title="angkor-hotel-1" /></a>
                </li>
                        <?php
                    }
                }
            ?>

            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
            <?php             
                for($i=1;$i<=24;$i++){
                    $img='hg_img'.$i;
                    //echo $img;
                    if(isset($hotelGallery[0][$img])){
                        ?>
                         <li><img src="<?php echo base_url();?>uploads/hotels/<?php echo $hotelGallery[0][$img];?>" alt="<?php echo $hotelGallery[0][$img];?>" title="<?php echo $hotelGallery[0][$img];?>" /></li>                         
                        <?php
                    }
                }
            ?>


            </ul>
        </div>
    </div>
    <!-- End of body section HTML codes -->
                    <!-- End Detail Slide -->

                    <!-- Hotel Content One -->
                    <section class="hotel-content detail-cn" id="hotel-content">
                        <div class="row">                        
                            <div class="col-lg-3 detail-sidebar">
                                <!-- Hight Light -->
                                <div class="hight-light">

                                    <h2>Fantastic</h2>
                                    <!-- Vote Text -->
                                    <div class="row">
                                        <!-- Recommend -->
                                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-6 vote-text">
                                            <p><span>95</span>%</p>
                                            <small>Member Recommend</small>
                                            <a href="" title="">Read 36 Reviews</a>

                                        </div>
                                        <!-- End Recommend -->
                                        <!-- Tripadvitsor -->
                                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-6  vote-text">
                                            <img src="<?php echo base_url(); ?>public/images/icon-tripadvitsor.png" alt="">
                                            <small>4.5 Very Good</small>
                                            <a href="" title="">145 Reviews</a>
                                        </div>
                                        <!-- End Tripadvitsor -->
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                                            <hr class="hr">

                                            <!-- Quote -->
                                            <blockquote class="quote-sidebar">
                                                <p>
                                                    Great location tucked behind the Ritz Hotel on Piccadilly. Good value for money. The suite I booked was good.<br>
                                                    <span><b>Daniel Brown</b> - Sweden,  28/3/2013</span>
                                                </p>
                                            </blockquote>
                                            <!-- End Quote -->
                                        </div>
                                    </div>
                                    <!-- End Vote Text -->

                                    

                                </div>
                                <!-- End Hight Light -->
                            </div>

                            <!-- Description -->
                            <div class="col-lg-9 hl-customer-like">

                                <h2>Why customer like this hotel</h2>

                                <!-- Custom link field -->
                                <div class="customer-like">
                                    <span class="cs-like-label">
                                        Nearest transport
                                    </span>
                                    <ul>
                                        <li>Shepherd's Bush (Central) Tube Station (0.5 Km / 6 min walk)</li>
                                    </ul>
                                </div>
                                <!-- End Custom link field -->

                                <!-- Custom link field -->
                                <div class="customer-like">
                                    <span class="cs-like-label">
                                        Distance to airport
                                    </span>
                                    <ul>
                                        <li> London Heathrow Airport (17.0 Km)</li>
                                        <li>London City Airport (18.3 Km)</li>
                                    </ul>
                                </div>
                                <!-- End Custom link field -->

                                <!-- Custom link field -->
                                <div class="customer-like">
                                    <span class="cs-like-label">
                                        Nearest transportCustomer comments
                                    </span>
                                    <ul>
                                        <li>Comfortable and clean, Friendly staff, Value for money</li>
                                    </ul>
                                </div>
                                <!-- End Custom link field -->

                                <!-- Custom link field -->
                                <div class="customer-like">
                                    <span class="cs-like-label">
                                        Top attractions in the area
                                    </span>
                                    <ul>
                                        <li>Westfield London (0.9 Km / 11 min walk)</li>
                                        <li>Natural History Museum (2.6 Km)</li>
                                        <li>Victoria and Albert Museum (2.9 Km)</li>
                                        <li>Hyde Park (3.0 Km)</li>
                                    </ul>
                                </div>
                                <!-- End Custom link field -->

                            </div>
                            <!-- End Description -->
                        </div>

                    </section>
                    <!-- End Hotel Content One -->

                    <!-- Check Rates-->
                    <section class="check-rates detail-cn" id="check-rates">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Check Rates &amp; Availability</h2>
                                    <hr class="hr">
                                    <a href="#hl-features" title="">Features</a>
                                    <a href="#details-policies" title="">Details &amp; Policies</a>
                                    <a href="#about-area" title="">About Area</a>
                                    <a href="#review-detail" title="">Reviews</a>
                                </div>
                            </div>
                            <div class="col-lg-9 check-rates-cn">

                                <!-- Form Check Hotel Availability -->
                                <div class="check-rates-form">
                                    <h3>Enter dates to see prices and availability</h3>
                                    <div class="form-search clearfix">
                                        <div class="form-field field-date">
                                            <input type="text" class="field-input calendar-input" placeholder="Check in">
                                        </div>
                                        <div class="form-field field-date">
                                            <input type="text" class="field-input calendar-input" placeholder="Check out">
                                        </div>
                                        <div class="form-field field-select">
                                            <div class="select">
                                                <span>Guest</span>
                                                <select>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-submit">
                                            <button type="submit" class="awe-btn awe-btn-4 arrow-right awe-btn-medium">Update</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Check Hotel Availability -->

                               <!--  <div class="service-check-rate">
                                    <h2>Prices 2015 Grand plaza<span>(/person)</span></h2>
                                    <div class="table-responsive">
                                        <table class="table tb-service-check-rate">
                                            <thead>
                                                <tr>
                                                    <th>Room Types</th>
                                                    <th class="text-center">April - May</th>
                                                    <th class="text-center">June - July</th>
                                                    <th class="text-center">Augus - September</th>
                                                    <th class="text-center">October</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>Luxury Suite</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                            </tr>
                                            <tr>
                                                <td>Bella suite</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                            </tr>
                                            <tr>
                                                <td>Double studio</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div> -->

                                <!-- Hotel Availability -->
                               <?php 
                             
                                $this->load->view('hotels/v_hotel_vailability');

                               ?>
                                <!-- Hotel Availability -->
                            </div>
                        </div>
                    </section>
                    <!-- End Check Rates -->

                    <!-- Hotel Features -->
                    <section class="hl-features detail-cn" id="hl-features">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Features</h2>
                                    <hr class="hr">
                                    <a href="#check-rates" title="">Check Rates &amp; Availability</a>
                                    <a href="#about-area" title="">About Area</a>
                                    <a href="#details-policies" title="">Details &amp; Policies</a>
                                    <a href="#review-detail" title="">Reviews</a>
                                </div>
                            </div>
                            <div class="col-lg-9 hl-features-cn">
                                <div class="featured-service">
                                    <h3>Facilities</h3>
                                    <ul class="service-list">
                                        <li class="unselected">
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-1.png" alt="">
                                                </div>
                                                <figcaption>Free breakfast</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-2.png" alt="">
                                                </div>
                                                <figcaption>Spa service</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-3.png" alt="">
                                                </div>
                                                <figcaption>Free parking</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-4.png" alt="">
                                                </div>
                                                <figcaption>Sauna service</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-5.png" alt="">
                                                </div>
                                                <figcaption>Restaurant</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-6.png" alt="">
                                                </div>
                                                <figcaption>Casino</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-7.png" alt="">
                                                </div>
                                                <figcaption>Swimming pool</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-8.png" alt="">
                                                </div>
                                                <figcaption>Airport transfer</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-9.png" alt="">
                                                </div>
                                                <figcaption>Free Wi-Fi in all rooms</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-10.png" alt="">
                                                </div>
                                                <figcaption>Smoking area</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-11.png" alt="">
                                                </div>
                                                <figcaption>Laundry service </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-12.png" alt="">
                                                </div>
                                                <figcaption>Business center</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-13.png" alt="">
                                                </div>
                                                <figcaption>Hair dryer</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service">
                                                    <img src="<?php echo base_url(); ?>public/images/icon-service-14.png" alt="">
                                                </div>
                                                <figcaption>24-hour front desk</figcaption>
                                            </figure>
                                        </li>

                                    </ul>
                                </div>
                                <div class="featured-service">
                                    <h3>Language Spoken</h3>
                                    <ul class="service-spoken">
                                        <li><img src="<?php echo base_url(); ?>public/images/icon-check.png" alt="">Arabic</li>
                                        <li><img src="<?php echo base_url(); ?>public/images/icon-check.png" alt="">French</li>
                                        <li><img src="<?php echo base_url(); ?>public/images/icon-check.png" alt="">Russian</li>
                                        <li><img src="<?php echo base_url(); ?>public/images/icon-check.png" alt="">English</li>
                                        <li><img src="<?php echo base_url(); ?>public/images/icon-check.png" alt="">Spanish</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Hotel Features -->

                    <!-- Details-Policies -->
                    <section class="details-policies detail-cn" id="details-policies">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Details &amp; Policies</h2>
                                    <hr class="hr">
                                    <a href="#about-area" title="">About Area</a>
                                    <a href="#check-rates" title="">Check Rates &amp; Availability</a>
                                    <a href="#hl-features" title="">Features</a>
                                    <a href="#review-detail" title="">Reviews</a>
                                </div>
                            </div>
                            <div class="col-lg-9 details-policies-cn">

                                <!-- Details Policies Item -->
                                <div class="policies-item">
                                    <h3>Apartment Description</h3>
                                    <p>
                                        Morbi sed sollicitudin augue. Ut metus nibh, fringilla vitae mi in, aliquam ullamcorper nisl. Integer id tincidunt libero. Donec pharetra est sed suscipit efficitur. In a gravida quam. Aenean vel dolor augue. In nec lacinia enim, vitae fermentum elit. Aliquam non diam sed lectus commodo hendrerit.
                                        <br>
                                        Vivamus pulvinar nulla id massa congue varius. Etiam vitae nunc consectetur, porttitor purus ac, sagittis dui. Ut sit amet consectetur diam. Suspendisse mollis dapibus porta. In erat quam, pulvinar eu efficitur ut, malesuada nec augue. Pellentesque odio orci, interdum eu tortor sollicitudin, tincidunt placerat erat. Quisque pretium mauris at condimentum imperdiet.
                                    </p>
                                </div>
                                <!-- End Details Policies Item -->
                                <!-- Details Policies Item -->
                                <div class="policies-item">
                                    <h3>Apartment Description</h3>
                                    <p>
                                        Morbi sed sollicitudin augue. Ut metus nibh, fringilla vitae mi in, aliquam ullamcorper nisl. Integer id tincidunt libero. Donec pharetra est sed suscipit efficitur. In a gravida quam. Aenean vel dolor augue. In nec lacinia enim, vitae fermentum elit. Aliquam non diam sed lectus commodo hendrerit.
                                        <br>
                                        Vivamus pulvinar nulla id massa congue varius. Etiam vitae nunc consectetur, porttitor purus ac, sagittis dui. Ut sit amet consectetur diam. Suspendisse mollis dapibus porta. In erat quam, pulvinar eu efficitur ut, malesuada nec augue. Pellentesque odio orci, interdum eu tortor sollicitudin, tincidunt placerat erat. Quisque pretium mauris at condimentum imperdiet.
                                    </p>
                                </div>
                                <!-- End Details Policies Item -->
                                <!-- Details Policies Item -->
                                <div class="policies-item">
                                    <h3>Apartment Description</h3>
                                    <p>
                                        Morbi sed sollicitudin augue. Ut metus nibh, fringilla vitae mi in, aliquam ullamcorper nisl. Integer id tincidunt libero. Donec pharetra est sed suscipit efficitur. In a gravida quam. Aenean vel dolor augue. In nec lacinia enim, vitae fermentum elit. Aliquam non diam sed lectus commodo hendrerit.
                                        <br>
                                        Vivamus pulvinar nulla id massa congue varius. Etiam vitae nunc consectetur, porttitor purus ac, sagittis dui. Ut sit amet consectetur diam. Suspendisse mollis dapibus porta. In erat quam, pulvinar eu efficitur ut, malesuada nec augue. Pellentesque odio orci, interdum eu tortor sollicitudin, tincidunt placerat erat. Quisque pretium mauris at condimentum imperdiet.
                                    </p>
                                </div>
                                <!-- End Details Policies Item -->

                            </div>
                        </div>
                    </section>
                    <!-- End Details-Policies -->

                    <!-- About Area -->
                    <section class="about-area detail-cn" id="about-area">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>about  the area</h2>
                                    <hr class="hr">
                                    <a href="#check-rates" title="">Check Rates &amp; Availability</a>
                                    <a href="#hl-features" title="">Features</a>
                                    <a href="#review-detail" title="">Reviews</a>
                                    <a href="#details-policies" title="">Details Policies</a>
                                </div>
                            </div>
                            <div class="col-lg-9">

                                <div class="hotel-detail-map">
                                   <!--  <div id="hotel-detail-map" data-latlng="51.5133647,-0.1907375">  
                                    </div> -->
                                    <?php echo $hotelDetail[0]['map']; ?>


                                    <p class="about-area-location"><i class="fa  fa-map-marker"></i><?php echo $hotelDetail[0]['h_address']; ?></p>
                                </div>

                                <div class="about-area-text">
                                    <h2>What to do</h2>
                                    <p>
                                        <b>Shop.</b> At the quirky Thai Home Industries, troll for stainless steel flatware inspired by upcountry farm tools that are part of the MoMA design collection (35 Oriental Avenue; 662-234-1736).
                                    </p>
                                    <p>
                                        <b>Thai Done Right.</b> Eat like a spice-loving local at Gallery Café — we love the crispy prawn cakes, <a href="#">Thai tuna salad</a> tossed with slivers of powerful chilies, and succulent chicken wrapped in pandanus leaves (86-100 Soi Captain Bush; 662-639-5580).
                                    </p>
                                    <p>
                                        <b>Stop and Smell.</b> The fragrant <a href="#">Pak Klong Talaad</a>, is the country’s most important wholesale flower market. The buying and selling frenzy starts around 2 a.m., when boats begin to dock near Memorial Bridge with a cornucopia of fresh flowers including orchids, marigolds, zinnias, jasmine and, of course, roses.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- End About Area -->

                    <!-- Hotel Detail Reviews -->
                    <section class="review-detail detail-cn" id="review-detail">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Reviews</h2>
                                    <hr class="hr">
                                    <a href="#check-rates" title="">Check Rates &amp; Availability</a>
                                    <a href="#hl-features" title="">Features</a>
                                    <a href="#details-policies" title="">Details &amp; Policies</a>
                                    <a href="#about-area" title="">About Area</a>
                                </div>
                            </div>
                            <div class="col-lg-9 review-detail-cn">
                                <!-- Review Tabs -->
                                <div class="review-tabs">
                                    <!-- Tabs Head -->
                                    <ul class="tabs-head nav-tabs-one">
                                        <li class="active"><a data-toggle="tab" href="#section1">Member reviews</a></li>
                                        <li><a data-toggle="tab" href="#section2">TripAdvisor reviews</a></li>
                                    </ul>
                                    <!-- Tabs Head -->
                                    <!-- Tabs Content -->
                                    <div class="tab-content">
                                        <div id="section1" class="tab-pane fade in active">
                                            <div class="review-tabs-cn">
                                                <div class="row">
                                                    <div class="col-sm-4 col-md-3 col-lg-4 col-lg-push-8 col-md-push-9 col-sm-push-8">
                                                        <div class="review-vote text-center">
                                                            <h3>
                                                                Fantastic
                                                            </h3>
                                                            <span class="vote-score">8.5</span>
                                                            <span class="vote-number">from <strong>145</strong> reviews</span>
                                                            <p>
                                                                <span><strong>95</strong>%</span>
                                                                Recommend
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8 col-md-9 col-lg-8 col-lg-pull-4 col-md-pull-3 col-sm-pull-4">
                                                        <div class="review-st">
                                                            <!-- Rule -->
                                                            <div class="row row-rule">
                                                                <div class="col-md-5 lable-st">&nbsp;</div>
                                                                <div class="col-md-7">
                                                                    <div class="rule-point">
                                                                        <span>0</span>
                                                                        <span>2</span>
                                                                        <span>4</span>
                                                                        <span>6</span>
                                                                        <span>8</span>
                                                                        <span>10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Rule -->
                                                            <!-- Item -->
                                                            <div class="row">
                                                                <div class="col-md-5 lable-st">Value for Money</div>
                                                                <div class="col-md-7">
                                                                    <div class="progress-rv" data-value="7.5"></div>
                                                                </div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <!-- Item -->
                                                            <div class="row">
                                                                <div class="col-md-5 lable-st">Location</div>
                                                                <div class="col-md-7">
                                                                    <div class="progress-rv" data-value="6.0"></div>
                                                                </div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <!-- Item -->
                                                            <div class="row">
                                                                <div class="col-md-5 lable-st">Staff Performance</div>
                                                                <div class="col-md-7">
                                                                    <div class="progress-rv" data-value="8.0"></div>
                                                                </div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <!-- Item -->
                                                            <div class="row">
                                                                <div class="lable-st col-md-5">Hotel Condition/Cleanliness</div>
                                                                <div class="col-md-7">
                                                                    <div class="progress-rv" data-value="6.0"></div>
                                                                </div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <!-- Item -->
                                                            <div class="row">
                                                                <div class="lable-st col-md-5">Room Comfort/Standard</div>
                                                                <div class="col-md-7">
                                                                    <div class="progress-rv" data-value="8.0"></div>
                                                                </div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <!-- Item -->
                                                            <div class="row">
                                                                <div class="lable-st col-md-5">Food/Dining</div>
                                                                <div class="col-md-7">
                                                                    <div class="progress-rv" data-value="4.5"></div>
                                                                </div>
                                                            </div>
                                                            <!-- End Item -->
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div id="section2" class="tab-pane fade">

                                        </div>
                                    </div>
                                    <!-- Tabs Content -->
                                </div>
                                <!-- End Review Tabs -->
                                <!-- Review All -->
                                <div class="review-all">
                                    <h4 class="review-h">
                                        All reviews (365)
                                    </h4>
                                    <!-- Review Item -->
                                    <div class="row review-item">
                                        <div class="col-xs-3 review-number">
                                            <ins>5.6</ins>
                                            <span>Isbawandi Zin</span>
                                            <small>from London, UK, 3/2/ 2014</small>
                                        </div>
                                        <div class="col-xs-9 review-text">
                                            <ul>
                                                <li><span class="icon fa fa-plus"></span>Location, warmth, cleanliness</li>
                                                <li><span class="icon icon-minus fa fa-minus"></span>Noisy, expensive</li>
                                            </ul>
                                            <p>
                                                Our stay was pleasant and joyful. We stayed in an apartment meant for 3 adults. First and foremost, close proximity to tube station was the reason of choosing this hotel. The cleaning services were fantastic. The support services were prompt...
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Review Item -->
                                    <!-- Review Item -->
                                    <div class="row review-item">
                                        <div class="col-xs-3 review-number">
                                            <ins>9.0</ins>
                                            <span>Isbawandi Zin</span>
                                            <small>from London, UK, 3/2/ 2014</small>
                                        </div>
                                        <div class="col-xs-9 review-text">
                                            <ul>
                                                <li><span class="icon fa fa-plus"></span>Location, warmth, cleanliness</li>
                                            </ul>
                                            <p>
                                                Our stay was pleasant and welcoming. We stayed in an apartment meant for 3 adults with kitchen facilities. The cleaning services were superp. We liked the laundry and kitchen cleaning services on top of the regular cleaning services. The support services were prompt...much needed extra bowls were delivered in a jiffy. Front desk were very cotdial and helpful though working under at times. Needed travel arrangements and info were delivered with smiles. Delivering luggeges to the room was done witbout request.. Computer and printing service in the lobby was really helpful...tbe charge reasonable
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Review Item -->
                                    <!-- Review Item -->
                                    <div class="row review-item">
                                        <div class="col-xs-3 review-number">
                                            <ins>5.6</ins>
                                            <span>Isbawandi Zin</span>
                                            <small>from London, UK, 3/2/ 2014</small>
                                        </div>
                                        <div class="col-xs-9 review-text">
                                            <ul>
                                                <li><span class="icon fa fa-plus"></span>Location, warmth, cleanliness</li>
                                                <li><span class="icon icon-minus fa fa-minus"></span>Noisy, expensive</li>
                                            </ul>
                                            <p>
                                                Our stay was pleasant and joyful. We stayed in an apartment meant for 3 adults. First and foremost, close proximity to tube station was the reason of choosing this hotel. The cleaning services were fantastic. The support services were prompt...
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Review Item -->
                                    <!-- Review Item -->
                                    <div class="row review-item">
                                        <div class="col-xs-3 review-number">
                                            <ins>9.0</ins>
                                            <span>Isbawandi Zin</span>
                                            <small>from London, UK, 3/2/ 2014</small>
                                        </div>
                                        <div class="col-xs-9 review-text">
                                            <ul>
                                                <li><span class="icon fa fa-plus"></span>Location, warmth, cleanliness</li>
                                            </ul>
                                            <p>
                                                Our stay was pleasant and welcoming. We stayed in an apartment meant for 3 adults with kitchen facilities. The cleaning services were superp. We liked the laundry and kitchen cleaning services on top of the regular cleaning services. The support services were prompt...much needed extra bowls were delivered in a jiffy. Front desk were very cotdial and helpful though working under at times. Needed travel arrangements and info were delivered with smiles. Delivering luggeges to the room was done witbout request.. Computer and printing service in the lobby was really helpful...tbe charge reasonable
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Review Item -->
                                </div>
                                <!-- End Review All -->
                            </div>
                        </div>
                    </section>
                    <!-- End Hotel Detail Reviews -->

                    <section class="detail-footer detail-cn">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9 detail-footer-cn">
                                <!-- Show More Book -->
                                <div class="row">
                                    <div class="col-xs-5 ">
                                        <div class="review-more">
                                            <a href="" title=""><i class="icon"></i> Show more reviews</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-7 text-right">
                                        <p class="price-book">
                                            From-<span>$345</span>/night
                                            <a href="" title="" class="awe-btn awe-btn-1 awe-btn-lager">Book Now</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- End Show More Book -->
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- End Main -->

        <!-- Footer -->
      <footer>
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-md-4">
                        <div class="logo-foter">
                            <a href="index.html" title=""><img src="<?php echo base_url() ?>public/images/logo-footer.png" alt=""></a>
                        </div>
                    </div>
                    <!-- End Logo -->
                    <!-- Navigation Footer -->
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="ul-ft">
                            <ul>
                                <li><a href="about.html" title="">About</a></li>
                                <li><a href="blog.html" title="">Blog</a></li>
                                <li><a href="fqa.html" title="">FQA</a></li>
                                <li><a href="careers.html" title="">Carrers</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navigation Footer -->
                    <!-- Navigation Footer -->
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="ul-ft">
                            <ul>
                                <li><a href="contact.html" title="">Contact Us</a></li>
                                <li><a href="#" title="">Privacy Policy</a></li>
                                <li><a href="#" title="">Term of Service</a></li>
                                <li><a href="#" title="">Security</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navigation Footer -->
                    <!-- Footer Currency, Language -->
                    <div class="col-sm-6 col-md-4">
                        <!-- Language -->
                        <div class="currency-lang-bottom dropdown-cn float-left">
                            <div class="dropdown-head">
                                <span class="angle-down"><i class="fa fa-angle-down"></i></span>
                            </div>
                            <div class="dropdown-body">
                                <ul>
                                    <li class="current"><a href="#" title="">English</a></li>
                                    <li><a href="#" title="">Bahasa Melayu</a></li>
                                    <li><a href="#" title="">Català</a></li>
                                    <li><a href="#" title="">Dansk</a></li>
                                    <li><a href="#" title="">Deutsch</a></li>
                                    <li><a href="#" title="">Francais</a></li>
                                    <li><a href="#" title="">Italiano</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Language -->
                        <!-- Currency -->
                        <div class="currency-lang-bottom dropdown-cn float-left">
                            <div class="dropdown-head">
                                <span class="angle-down"><i class="fa fa-angle-down"></i></span>
                            </div>
                            <div class="dropdown-body">
                                <ul>
                                    <li class="current"><a href="#" title="">US</a></li>
                                    <li><a href="#" title="">ARS</a></li>
                                    <li><a href="#" title="">ADU</a></li>
                                    <li><a href="#" title="">CAD</a></li>
                                    <li><a href="#" title="">CHF</a></li>
                                    <li><a href="#" title="">CNY</a></li>
                                    <li><a href="#" title="">CZK</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Currency -->
                        <!--CopyRight-->
                        <p class="copyright">
                            © 2015 – 2017 Bookyourtrip™ All rights reserved.
                        </p>
                        <!--CopyRight-->
                    </div>
                    <!-- End Footer Currency, Language -->
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        
        <!-- End Footer -->
        
    </div>
    
    <!-- Library JS -->
    <script type="text/javascript" src="<?php echo base_url();?>public/js/library/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/library/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/library/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/library/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/library/parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/library/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/library/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/library/jquery.mb.YTPlayer.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/library/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/library/SmoothScroll.js"></script>
    <!-- End Library JS -->
    <!-- Main Js -->
    <script type="text/javascript" src="<?php echo base_url();?>public/js/script.js"></script>
    <!-- End Main Js -->

 <!-- Insert to your webpage before the </head> -->
    <!-- <script src="<?php //echo base_url();?>slider_detail/jquery.js"></script> -->
    <script src="<?php echo base_url();?>slider_detail/amazingslider.js"></script>
    
    <script src="<?php echo base_url();?>slider_detail/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
    <!-- Map -->
    <script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&key=AIzaSyA7jJsd6nu-n6Y86CoAzpRYC_AyB8rIU34" async="" defer="defer" type="text/javascript"></script>

</body>
</html>
