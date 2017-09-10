<!DOCTYPE html>
<!--[if IE 7 ]> <html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html class="ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?php  echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Font Google -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7COpen+Sans:300,400,600' rel='stylesheet' type='text/css'>
    <!-- End Font Google -->
    <!-- Library CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/library/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/library/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/library/jquery-ui.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/css/library/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/library/jquery.mb.YTPlayer.min.css">
    <!-- End Library CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">



<style>
.row{position: relative;}
.post-list{ 
    margin-bottom:20px;
}
div.list-item {
    border-left: 4px solid #7ad03a;
    margin: 5px 15px 2px;
    padding: 1px 12px;
    background-color:#F1F1F1;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    height: 60px;
}
div.list-item p {
    margin: .5em 0;
    padding: 2px;
    font-size: 13px;
    line-height: 1.5;
}
.list-item a {
    text-decoration: none;
    padding-bottom: 2px;
    color: #0074a2;
    -webkit-transition-property: border,background,color;
    transition-property: border,background,color;-webkit-transition-duration: .05s;
    transition-duration: .05s;
    -webkit-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out;
}
.list-item a:hover{text-decoration:underline;}
.list-item h2{font-size:25px; font-weight:bold;text-align: left;}

/* search & filter */
.post-search-panel input[type="text"]{
    width: 220px;
    height: 28px;
    color: #333;
    font-size: 16px;
}
.post-search-panel select{
    height: 34px;
    color: #333;
    font-size: 16px;
}

/* Pagination */
div.pagination {
    font-family: "Lucida Sans Unicode", "Lucida Grande", LucidaGrande, "Lucida Sans", Geneva, Verdana, sans-serif;
    padding:2px;
    margin: 20px 10px;
    float: right;
}

div.pagination a {
    margin: 2px;
    padding: 0.5em 0.64em 0.43em 0.64em;
    background-color: #FD1C5B;
    text-decoration: none; /* no underline */
    color: #fff;
}
div.pagination a:hover, div.pagination a:active {
    padding: 0.5em 0.64em 0.43em 0.64em;
    margin: 2px;
    background-color: #FD1C5B;
    color: #fff;
}
div.pagination span.current {
        padding: 0.5em 0.64em 0.43em 0.64em;
        margin: 2px;
        background-color: #f6efcc;
        color: #6d643c;
    }
div.pagination span.disabled {
        display:none;
    }
.pagination ul li{display: inline-block;}
.pagination ul li a.active{opacity: .5;}

/* loading */
.loading{position: absolute;left: 0; top: 0; right: 0; bottom: 0;z-index: 2;background: rgba(255,255,255,0.7);}
.loading .content {
    position: absolute;
    transform: translateY(-50%);
     -webkit-transform: translateY(-50%);
     -ms-transform: translateY(-50%);
    top: 50%;
    left: 0;
    right: 0;
    text-align: center;
    color: #555;
}
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
function searchFilter(page_num) {
    page_num = page_num?page_num:0;
    var keywords = $('#keywords').val();
    var sortBy = $('#sortBy').val();
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>hotels/ajaxPaginationData/'+page_num,
        data:'page='+page_num+'&keywords='+keywords+'&sortBy='+sortBy,
        beforeSend: function () {
            $('.loading').show();
        },
        success: function (html) {
            $('#postList').html(html);
            $('.loading').fadeOut("slow");
        }
    });
}
</script>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="tb-cell">
            <div id="page-loading">
                <div></div>
                <p>Loading</p>
            </div>
        </div>
    </div>
    
    <!-- Wrap -->
    <div id="wrap">

        <!-- Header -->
    

                <!--Navigation-->
                    <?php
                    if(isset($navigation)){
                        // $this->load->view('templates/inc/v_navigation');
                        $this->load->view($navigation);

                    }                               
                     ?>
                <!--End Navigation-->
      
        <!-- End Header -->

        
        <!--Banner-->
                <?php 
                    // $this->load->view('inc/banner');
                $this->load->view('hotels/v_search_hotels');
                
                ?>
        <!--End Banner-->

        <?php 
                $this->load->view($body);

        ?>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-md-4">
                        <div class="logo-foter">
                            <a href="index.html" title="">
                            <img src="<?php echo base_url(); ?>public/images/logo-footer.png" alt=""></a>
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
                            © 2009 – 2014 Bookyourtrip™ All rights reserved.
                        </p>
                        <!--CopyRight-->
                    </div>
                    <!-- End Footer Currency, Language -->
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        
    </div>
    
   <?php 

   $this->load->view('home/home_script');
    
   ?>
</body>
</html>
