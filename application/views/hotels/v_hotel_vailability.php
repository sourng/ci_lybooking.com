 <div class="hl-availability">
                                    <div class="table-responsive">
                                        <table class="table table-availability">
                                            <tr>
                                                <th>Room Types</th>
                                                <th>Rate <span>(/night)</span></th>
                                                <th>
                                                    No. Rooms
                                                </th>
                                                <th></th>
                                            </tr>

                                            <?php 
                                            foreach($hotelRooms as $hr){
                                                ?>
                                                <tr>
                                                <td class="avai-td-text">
                                                    <figure>
                                                        <img src="<?php echo base_url(); ?>uploads/hotels/<?php echo $hr['hr_image']; ?>" alt="">    
                                                    </figure>
                                                    <h3><?php echo $hr['hr_name']; ?></h3>
                                                    <p><?php echo $hr['hr_description']; ?></p>
                                                    <a href="<?php echo site_url(); ?>public/popup/popup-room.php " class="a-popup-room">more info</a>
                                                </td>
                                                <td class="avai-td-price">
                                                    <span class="price">$<?php echo $hr['hr_base_rate']; ?><small>/night</small></span>
                                                </td>
                                                <td class="avai-td-room">
                                                    <div class="select">
                                                        <span data-placeholder="select room">1 room</span>
                                                        <select name="room">
                                                            <option value="1">1 room</option>
                                                            <option selected value="1">2 room</option>
                                                            <option value="1">3 room</option>
                                                            <option value="1">4 room</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="avai-td-book">
                                                    <a href="" class="awe-btn awe-btn-1 awe-btn-small">Book</a>
                                                </td>
                                            </tr>

                                                <?php
                                            }


                                            ?>                                            

                                        </table>
                                    </div>
                                </div>