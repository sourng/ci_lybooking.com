<?php if(!empty($posts)): foreach($posts as $row): ?>
            
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