        <section class="banner">

            <!-- Banner Slide-->
            <div class="banner-slide" id="banner-slide">
                <!-- ITEM -->
                <div class="banner-slide-item" data-src="<?php echo base_url(); ?>uploads/background/bg-1.jpg"></div>
                <!-- END ITEM -->
                <!-- ITEM -->
                <div class="banner-slide-item" data-src="<?php echo base_url(); ?>uploads/background/bg-2.jpg"></div>
                <!-- END ITEM -->

            </div>
            <!--End Banner Slide-->

            <div class="container">

                <div class="logo-banner text-center">
                    <a href="" title="">
                        <img src="<?php echo base_url(); ?>public/images/logo-banner.png" alt="">
                    </a>
                </div>

                <!-- Banner Content -->
                <div class="banner-cn">                   

                    <!-- Tabs Content -->
                    <div class="tab-content">

                        <!-- Search Hotel -->
                        <form action="" id='form-hotel' method="post" accept-charset="utf-8">
                            <div class="form-cn form-hotel tab-pane active in" id="form-hotel">
                            <h2>Where would you like to stay?</h2>
                            <div class="form-search clearfix">
                                <div class="form-field field-destination">
                                    <label for="destination"><span>Destination:</span> Country, City, Airport, Area, Landmark</label>
                                    <input type="text" id="keywords" name="txtdestination" id="destination" class="field-input" onkeyup="searchFilter()">
                                </div>
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
                                            <option>Guest</option>
                                            <option>1 Guest</option>
                                            <option>2 Guest</option>
                                            <option>3 Guest</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button class="awe-btn awe-btn-lager awe-search" id="btnSearch" type="button">Search</button>
                                    <!--<button type="button" id="btnSearch" class="awe-btn awe-btn-lager awe-search textbtnload">Search</button>-->
                                </div>                                
                                 
                            </div>
                        </div>
                        </form>

                        <!-- End Search Hotel -->
                    </div>
                    <!-- End Tabs Content -->

                </div>
                <!-- End Banner Content -->

            </div>

        </section>