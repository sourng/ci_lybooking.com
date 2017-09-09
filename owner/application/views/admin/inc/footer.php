<footer>
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-md-4">
                        <div class="logo-foter">
                            <a href="index.html" title=""><img src="<?php echo base_url() ?>public/hotels/images/logo-footer.png" alt=""></a>
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
        
    </div>
    
    <!-- Library JS -->
    <script type="text/javascript" src="<?php echo base_url();?>public/hotels/js/library/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/hotels/js/library/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/hotels/js/library/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/hotels/js/library/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/hotels/js/library/parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/hotels/js/library/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/hotels/js/library/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/hotels/js/library/jquery.mb.YTPlayer.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/hotels/js/library/SmoothScroll.js"></script>
    <!-- End Library JS -->
    <!-- Main Js -->
    <script type="text/javascript" src="<?php echo base_url();?>public/hotels/js/script.js"></script>
    <!-- End Main Js -->

        <!-- jQuery Version 1.11.1 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  

<script>
        $(document).ready(function(){
            // Load category when page load
                hotels_top_sale();
            // window.onload = function(){
            //  load_category();
            // };
             hotel_destinations();
             hotel_dest_grid();

            $('[data-toggle="tooltip"]').tooltip();   
           
        function hotels_top_sale()
            {
                $.ajax({
                    url : "<?php echo base_url() ?>front/hotel_top_sale",
                    //url:"<?php //echo base_url() ?>getdata",
                    type: "GET",
                    data: $('#frm-create').serialize(),
                    dataType: 'json',
                    success:function(data){
                        $('#category-row').html(data);
                    },
                    error: function(){
                        alert('Error...');
                    }
                });   

                            
            }

             function hotel_destinations()
            {
                $.ajax({
                    url : "<?php echo base_url() ?>front/hotel_destinations",
                    //url:"<?php //echo base_url() ?>getdata",
                    type: "GET",
                    data: $('#frm-create').serialize(),
                    dataType: 'json',
                    success:function(data){
                        $('#destination-row').html(data);
                       // alert('Get Data...');
                    },
                    error: function(){
                        alert('Error...');
                    }
                });             
            }


   function hotel_dest_grid()
            {
                $.ajax({
                    url : "<?php echo base_url() ?>front/hotel_dest_grid",
                    //url:"<?php //echo base_url() ?>getdata",
                    type: "GET",
                    data: $('#frm-create').serialize(),
                    dataType: 'json',
                    success:function(data){
                        $('#destination-grid').html(data);
                       // alert('Get Data...');
                    },
                    error: function(){
                        alert('Error...');
                    }
                });             
            }

    

          


            $('body').tooltip({
                selector:'[data-toggle="tooltip"]'
            });
        }); 
    </script>



</body>
</html>
