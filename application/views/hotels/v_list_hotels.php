
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
                                            <select name="star_rating" id="star_rating" onchange="getStar()">
                                                <option value="0">Star rating</option>
                                                <option selected value="1">Star rating 1</option>
                                                <option value="2">Star rating 2</option>
                                                <option value="3">Star rating 3</option>
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
<div  class="hotel-list-cn clearfix" id="postList">
<div class="row">
    
        <div class="post-list" id="postList">
            <?php if(!empty($hotel)): foreach($hotel as $row): ?>
            
              <!-- Hotel Item -->
                    <div class="hotel-list-item">
                     <figure class="hotel-img float-left">
                         <a href="<?php echo site_url();?>hotel/detail/<?php echo $row['hotel_id']; ?>" title="">
                             <img src="<?php echo base_url(); ?>uploads/hotels/<?php echo $row['h_feature_image']; ?>" alt="<?php echo $row['h_feature_image']; ?>">
                         </a>
                     </figure>    
                                    <div class="hotel-text">
                                        <div class="hotel-name">
                                                <a href="<?php echo site_url();?>hotel/detail/<?php echo $row['hotel_id']; ?>" title=""><?php echo $row['h_name']; ?></a>
                                                 <span class="hotel-star">
                                                <?php 
                                                if($row['star_rating']>0){
                                                    for($i=1;$i<= $row['star_rating'];$i++){
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
                                                    <?php echo $row['h_address']; ?>
                                                </address>
                                            </div>
                                            <p>
                                            <?php 
                                            echo short_title($row['h_description'], 168);
                                      ?>
                                                <!-- <a href="" title="">view all 125 reviews</a> -->
                                            </p>
                                            <hr class="hr">
                                            <div class="price-box float-left">
                                                <span class="price old-price">From-</span>
                                                <span class="price special-price">$ <?php echo $row['hr_base_rate']; ?><small>/night</small></span>
                                            </div>
                                            <div class="hotel-service float-right">
                                              
                                                <?php
                                                $str = $row['h_facilities'];
                                                //$str = substr($str, 0, strrpos($str, ',', -1))." ";
                                                $final = str_replace(","," ",$str);

                                                echo $final;
                                                 ?>                                        


                                            </div>
                                        </div>


      </div>
<!-- End Hotel Item -->





            <?php endforeach; else: ?>
            <p>Post(s) not available.</p>
            <?php endif; ?>
            <?php echo $this->ajax_pagination->create_links(); ?>
        </div>
        <div class="loading" style="display: none;">
            <div class="content">
                <img src="<?php echo base_url().'assets/images/loading.gif'; ?>"/>
            </div>
        </div>
    </div>     
</div><!-- End Hotel Grid Content-->
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
                                  //  echo $pagination;
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
                                                <input type="text" id="destination_left" value="" class="field-input">
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
                                                <button type="submit" id="btnSearch_Left" class="awe-btn awe-btn-medium awe-search">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Search Form Sidebar -->
                                <!-- Narrow your results -->
                               
                                <!-- End Narrow your results -->
                             

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
