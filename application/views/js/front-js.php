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
                    //url:"<?php echo base_url() ?>getdata",
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