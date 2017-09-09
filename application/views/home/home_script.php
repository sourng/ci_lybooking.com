 <!-- Library JS -->
    <script type="text/javascript" src="<?php echo base_url();?>public/js/library/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/library/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/library/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/library/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/library/parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/library/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/library/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/library/jquery.mb.YTPlayer.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/library/SmoothScroll.js"></script>
    <!-- End Library JS -->
    <!-- Main Js -->
    <script type="text/javascript" src="<?php echo base_url();?>public/js/script.js"></script>
    <!-- End Main Js -->





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
                    url : "<?php echo base_url() ?>home/hotel_top_sale",
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
                    url : "<?php echo base_url() ?>home/hotel_destinations",
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
                    url : "<?php echo base_url() ?>home/hotel_dest_grid",
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
        
        
        // Search
$('#btnSearch').on('click',function (){
                // var id=$(this).attr('datasearch');
                var dd =$('#destination').val();
                dd=dd.trim().replace(/ /g, '/');
               // alert(dd);

           $.ajax({
                    url : "<?php echo base_url(); ?>hotel/search/"+dd,
                    type: "GET",
                    data: $('#form-hotel').serialize(),
                    dataType: 'json',
                    success:function(data){
                        $('#postList').html(data);
                    },
                    error: function(){
                        alert('Error...'+dd);
                    }
                }); 
            });
            
$('.textbtnload').on('click',function(e){
    e.preventDefault();
 // load_hotels();
//  manageData();
  load_hotels_find();
})




    function load_hotels()
    {
        $.ajax({
               // url : "<?php echo base_url() ?>hotel/get_hotels",
               url : "<?php echo base_url() ?>hotel/find",
                type: "GET",
                data: $('#frm-create').serialize(),
                dataType: 'json',
                success:function(data){
                                $('#postList').html(data);
                },
                error: function(){
                        alert('Error...');
                }
        });		    	
    }
    
    function load_hotels_find()
    {
        $.ajax({
              url : "<?php echo base_url() ?>hotel/get_hotels",
               //url : "<?php echo base_url() ?>hotel/ajaxPaginationData",
                type: "GET",
                data: $('#frm-create').serialize(),
                dataType: 'json',
                success:function(data){
                                $('#postList').html(data);
                },
                error: function(){
                        alert('Error...');
                }
        });		    	
    }
    
    
$("#btnSearch_Left").click(function()
{
    
    alert(1);
    //$('#search_results').hide();
    
    
      $.ajax({
              url : "<?php echo base_url() ?>hotel/only_hotels",
               //url : "<?php echo base_url() ?>hotel/ajaxPaginationData",
                type: "POST",
                data: $('#postList').serialize(),
                dataType: 'json',
                success:function(data){
                                $('#postList').html(data);
                },
                error: function(){
                        alert('Error...');
                }
        });
    

 });
      
  
        
    </script>