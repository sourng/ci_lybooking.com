
  <!-- Main -->
        <div class="main">
            <div class="container">
                <div class="main-cn hotel-page bg-white clearfix">
                    <div class="row">
                    
                        <!-- Hotel Right -->
                        <div class="col-md-9 col-md-push-3">

                            <!-- Breakcrumb -->
                            <section class="breakcrumb-sc">
                                <ul class="breadcrumb arrow">
                                    <li><a href="<?php echo site_url();?><?php echo $breadcrumb_1; ?>.html"><i class="fa fa-home"></i></a></li>
                                     <li>
                                    <a href="<?php echo site_url();?><?php echo $breadcrumb_2; ?>.html" title=""><?php echo $breadcrumb_2; ?>            
                                    </a>
                                    </li>
                                    <li>
                                    <a href="<?php echo site_url();?><?php echo $breadcrumb_3; ?>.html" title=""><?php echo $breadcrumb_3; ?>            
                                    </a>
                                    </li>
                                    <li><?php echo $breadcrumb_4; ?></li>
                                    
                                </ul>

                            </section>
                            <!-- End Breakcrumb -->
                            <!-- Hotel List -->
                            <section class="hotel-list">

                                <!-- Sort by and View by -->
                                <div class="sort-view clearfix">
                                    <!-- Sort by -->
                                    <div class="sort-by float-left">
                                        <label>Sort by: </label>
                                        <div class="sort-select select float-left">
                                            <span data-placeholder="Select">Star rating</span>
                                            <select name="start">
                                                <option value="1">Star rating</option>
                                                <option selected value="1">Star rating 1</option>
                                                <option value="1">Star rating 2</option>
                                                <option value="1">Star rating 3</option>
                                            </select>
                                        </div>
                                        <div class="sort-select select float-left">
                                            <span data-placeholder="Select">Guest rating</span>
                                            <select name="guest">
                                                <option value="1">Guest rating</option>
                                                <option selected value="1">Guest rating 1</option>
                                                <option value="1">Guest rating 2</option>
                                                <option value="1">Guest rating 3</option>
                                            </select>
                                        </div>
                                        <div class="sort-select select float-left">
                                            <span data-placeholder="Select">Pricing</span>
                                            <select name="pricing">
                                                <option value="1">Pricing</option>
                                                <option selected value="1">Pricing</option>
                                                <option value="1">Pricing</option>
                                                <option value="1">Pricing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End Sort by -->
                                    <!-- View by -->
                                    <div class="view-by float-right">
                                        <ul>
                                            <li><a href="hotel-list.html" title=""><img src="<?php echo base_url(); ?>public/images/icon-grid.png" alt=""></a></li>
                                            <li><a href="hotel-list-2.html" title="" class="current"><img src="<?php echo base_url(); ?>public//images/icon-list.png" alt=""></a></li>
                                            <li><a href="hotel-maps.html" title=""><img src="<?php echo base_url(); ?>public/images/icon-map.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                    <!-- View by -->
                                </div>
                                <!-- End Sort by and View by -->

                                <!-- Hotel Grid Content-->
                                <div  class="hotel-list-cn clearfix">

                                   <?php 
                                   //for($i=1;$i<=5;$i++){
                                 // foreach ($getHotels as $row) {
                                        
                                 foreach ($getHotels->result() as $row) {
                                    ?>
                                     <!-- Hotel Item -->
                                       <div class="hotel-list-item">
                                        <figure class="hotel-img float-left">
                                            <a href="<?php echo site_url();?>hotels/detail/<?php echo $row->hotel_id; ?>" title="">
                                                <img src="<?php echo base_url(); ?>uploads/hotels/<?php echo $row->h_feature_image; ?>" alt="<?php echo $row->h_feature_image; ?>">
                                            </a>
                                        </figure>

                                         <div class="hotel-text">
                                            <div class="hotel-name">
                                                <a href="<?php echo site_url();?>hotels/detail/<?php echo $row->hotel_id; ?>" title=""><?php echo $row->h_name; ?></a>
                                                 <span class="hotel-star">
                                                <?php 
                                                if($row->star_rating>0){
                                                    for($i=1;$i<= $row->star_rating;$i++){
                                                        ?>
                                                        <i class="glyphicon glyphicon-star"></i>
                                                        <?php
                                                    }
                                                }else{
                                                    ?>
                                                    <i class="glyphicon glyphicon-star-empty"></i>

                                                    <?php
                                                }                                             

                                                ?>
                                                 
                                                </span>
                                            </div>
                                            <div class="hotel-star-address">    
                                               
                                                <span class="rating">
                                                    Good <br>
                                                    <ins>7.5</ins>
                                                </span> <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>

                                                <address class="hotel-address">
                                                    <?php echo $row->h_address; ?>
                                                </address>
                                            </div>
                                            <p>
                                            <?php 
                                            echo short_title($row->h_description, 168);
                                          // echo $limited_word;
                                         // echo $row['h_description'];

                                            ?>
                                                <!-- <a href="" title="">view all 125 reviews</a> -->
                                            </p>
                                            <hr class="hr">
                                            <div class="price-box float-left">
                                                <span class="price old-price">From-</span>
                                                <span class="price special-price">$ <?php //echo $row->hr_base_rate; ?><small>/night</small></span>
                                            </div>
                                            <div class="hotel-service float-right">
                                              
                                                <?php
                                                $str = $row->h_facilities;
                                                //$str = substr($str, 0, strrpos($str, ',', -1))." ";
                                                $final = str_replace(","," ",$str);

                                                echo $final;
                                                 ?>                                        


                                            </div>
                                        </div>
                                    
                                          </div>
                                    <!-- End Hotel Item -->
                                    <?php
                                    } ?>
                                    
                                    
                                </div>
                                <!-- End Hotel Grid Content-->
                                <!-- Page Navigation -->
                             <!--    <div class="page-navigation-cn">
                                    <ul class="page-navigation"> -->
                                        <!--<li class="first"><a href="" title="">First</a></li>-->
                                       <!--  <li class="current"><a href="" title="">1</a></li>
                                        <li><a href="" title="">2</a></li>
                                        <li><a href="" title="">3</a></li>
                                        <li><a href="" title="">4</a></li>
                                        <li><a href="" title="">5</a></li>
                                        <li><a href="" title="">...</a></li>
                                        <li class="last"><a href="" title="">Last</a></li>
                                    </ul>

                                </div> -->

                                <?php 
                                    //echo $page_link;
                                    echo $pagination;
                                
                                //$this->load->model('m_sourng');

                                 //$re=$this->s_sourng->get_single_value();
                                //echo $re;


                                  //  echo "Testing";

                                ?>
                                <!-- Page Navigation -->

                            </section>
                            <!-- End Hotel List -->

                        </div>
                        <!-- End Hotel Right -->

                        <!-- Sidebar Hotel -->
                        <div class="col-md-3 col-md-pull-9">
                            <!-- Sidebar Content -->
                            <div class="sidebar-cn">
                                <!-- Search Result -->
                                <div class="search-result">
                                    <p>
                                        We found <br>
                                        <ins><?php echo $hotel_count; ?></ins> <span>properties availability</span>
                                    </p>
                                </div>
                                <!-- End Search Result -->
                                <!-- Search Form Sidebar -->
                                <div class="search-sidebar">
                                    <div class="row">
                                        <div class="form-search clearfix">
                                            <div class="form-field col-md-12">
                                                <label for="destination"><span>Destination:</span> Netherlands</label>
                                                <input type="text" id="destination" value="" class="field-input">
                                            </div>
                                            <div class="form-field field-date col-md-6">
                                                <input type="text" class="field-input calendar-input" placeholder="Check in">
                                            </div>
                                            <div class="form-field field-date col-md-6">
                                                <input type="text" class="field-input calendar-input" placeholder="Check out">
                                            </div>
                                            <div class="form-field field-select col-md-6">
                                                <div class="select">
                                                    <span>2 guest</span>
                                                    <select>
                                                        <option>1 guest</option>
                                                        <option selected>2 guest</option>
                                                        <option>3 guest</option>
                                                        <option>4 guest</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-submit col-md-12">
                                                <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Search Form Sidebar -->
                                <!-- Narrow your results -->
                                <div class="narrow-results">
                                    <h6>Narrow your results</h6>
                                    <div class="narrow-form">
                                        <form action="narrow" method="get">
                                            <input type="text" name="" class="narrow-input" placeholder="Property name contains:">
                                            <button class="submit-narrow"></button>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Narrow your results -->
                                <!-- Star rating-->
                                <div class="widget-sidebar start-rating-sidebar">
                                    <h4 class="title-sidebar">Star rating</h4>
                                    <ul class="widget-rate">
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="rating-5" type="checkbox" class="checkbox" />
                                                <label for="rating-5"></label>
                                            </div>
                                            <div class="group-star">
                                                <i class="glyphicon glyphicon-star"></i>
                                                <i class="glyphicon glyphicon-star"></i>
                                                <i class="glyphicon glyphicon-star"></i>
                                                <i class="glyphicon glyphicon-star"></i>
                                                <i class="glyphicon glyphicon-star"></i>
                                            </div>
                                            5 Stars
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="rating-4" type="checkbox" class="checkbox" />
                                                <label for="rating-4"></label>
                                            </div>
                                            <div class="group-star">
                                                <i class="glyphicon glyphicon-star"></i>
                                                <i class="glyphicon glyphicon-star"></i>
                                                <i class="glyphicon glyphicon-star"></i>
                                                <i class="glyphicon glyphicon-star"></i>
                                            </div>
                                            4 Stars
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="rating-3" type="checkbox" class="checkbox" />
                                                <label for="rating-3"></label>
                                            </div>
                                            <div class="group-star">
                                                <i class="glyphicon glyphicon-star"></i>
                                                <i class="glyphicon glyphicon-star"></i>
                                                <i class="glyphicon glyphicon-star"></i>
                                            </div>
                                            3 Stars
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="rating-2" type="checkbox" class="checkbox" />
                                                <label for="rating-2"></label>
                                            </div>
                                            <div class="group-star">
                                                <i class="glyphicon glyphicon-star"></i>
                                                <i class="glyphicon glyphicon-star"></i>
                                            </div>
                                            2 Stars
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="rating-1" type="checkbox" class="checkbox" />
                                                <label for="rating-1"></label>
                                            </div>
                                            <div class="group-star">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </div>
                                            1 Stars
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="rating-6" type="checkbox" class="checkbox" />
                                                <label for="rating-6"></label>
                                            </div>
                                            <div class="group-star">
                                                <i class="glyphicon glyphicon-star-empty"></i>
                                            </div>
                                            Not Rated
                                            <span>12</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Star rating -->
                                <!-- Price Slider -->
                                <div class="widget-sidebar price-slider-sidebar">
                                    <h4 class="title-sidebar">Price <span>(per night)</span></h4>
                                    <div class="slider-sidebar price-slider">
                                        <input type="text" name="price" class="range" value="0,1500" />
                                    </div>
                                </div>
                                <!-- End Price Slider -->
                                <!-- Hotel facilities -->
                                <div class="widget-sidebar facilities-sidebar">
                                    <h4 class="title-sidebar">Hotel facilities</h4>
                                    <ul class="widget-ul">
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="facilities-1" type="checkbox" class="checkbox" />
                                                <label for="facilities-1">Swimming Pool</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="facilities-2" type="checkbox" class="checkbox" checked />
                                                <label for="facilities-2">Gym/Fitness</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="facilities-3" type="checkbox" class="checkbox" />
                                                <label for="facilities-3">Car Park</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="facilities-4" type="checkbox" class="checkbox" />
                                                <label for="facilities-4">Spa/Sauna</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="facilities-5" type="checkbox" class="checkbox" />
                                                <label for="facilities-5">Casino</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="facilities-6" type="checkbox" class="checkbox" />
                                                <label for="facilities-6">Free Wifi</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="facilities-7" type="checkbox" class="checkbox" />
                                                <label for="facilities-7">Pet-friendly</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="facilities-8" type="checkbox" class="checkbox" />
                                                <label for="facilities-8">Airport Transfer</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="facilities-9" type="checkbox" class="checkbox" />
                                                <label for="facilities-9">Smoking Area</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Hotel facilities -->
                                <!-- Area -->
                                <div class="widget-sidebar area-sidebar">
                                    <h4 class="title-sidebar">Area</h4>
                                    <ul class="widget-ul">
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="area-1" type="checkbox" class="checkbox" />
                                                <label for="area-1">Earls Court</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="area-2" type="checkbox" class="checkbox" checked />
                                                <label for="area-2">Victoria and Westminster</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="area-3" type="checkbox" class="checkbox" />
                                                <label for="area-3">Bloomsbury - Fitzrovia</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="area-4" type="checkbox" class="checkbox" />
                                                <label for="area-4">West End -Soho</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="area-5" type="checkbox" class="checkbox" />
                                                <label for="area-5">Chelsea - Kensington</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="area-6" type="checkbox" class="checkbox" />
                                                <label for="area-6">Heathrow &amp; Nearby</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="area-7" type="checkbox" class="checkbox" />
                                                <label for="area-7">Gatwick Airport &amp; Nearby</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="area-8" type="checkbox" class="checkbox" />
                                                <label for="area-8">Heathrow &amp; Nearby</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="area-9" type="checkbox" class="checkbox" />
                                                <label for="area-9">The City</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="area-10" type="checkbox" class="checkbox" />
                                                <label for="area-10">Greenwich</label>
                                            </div>
                                            <span>12</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Area -->

                            </div>
                            <!-- End Sidebar Content -->
                        </div>
                        <!-- End Sidebar Hotel -->

                    </div>

                </div>
            </div>
        </div>
        <!-- End Main -->

 <?php
function short_title($old_string,$limit_word){
    // strip tags to avoid breaking any html
    $string = strip_tags($old_string);

    if (strlen($string) > $limit_word) {

        // truncate string
        $stringCut = substr($string, 0, $limit_word);

        // make sure it ends in a word so assassinate doesn't become ass...
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
    }
    return($string);
}
         
?>