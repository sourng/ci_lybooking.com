<script>
		$(document).ready(function(){
			// Load category when page load
				hotels_top_sale();
			// window.onload = function(){
			// 	load_category();
			// };

		    $('[data-toggle="tooltip"]').tooltip(); 
		    //Create Category
		    $('#btn-create').on('click',function(){
		    	$.ajax({
		    		url : "<?php echo base_url() ?>welcome/create_category",
		    		type: "POST",
		    		data: $('#frm-create').serialize(),
		    		dataType: 'json',
		    		success:function(data){
		    			if(data.status)
		    			{
		    				load_category();
		    				//Clear Form
		    				$('#frm-create')[0].reset();
		    				alert('Record Have been Created...');
		    			}
		    		},
		    		error: function(){
		    			alert('Error...');
		    		}
		    	});
		    });

			$('#category-row').on('click','.btn-confirm-delete',function (){
				var id=$(this).attr('dataid');
				$('#myModalDelete').data('id',id).modal('show');
			});

			$('#btn-remove').on('click',function(){
				var id= $('#myModalDelete').data('id');
		    	$.ajax({
		    		url : "<?php echo base_url() ?>welcome/delete_category",
		    		type: "POST",
		    		data: {cate_id:id},
		    		dataType: 'json',
		    		success:function(data){
		    			alert('Category deleted successfully...');
		    			$('#myModalDelete').modal('hide');
						load_category();
		    		},
		    		error: function(){
		    			alert('Error...');
		    		}
		    	});	
			})
		   

		   function load_category()
		    {
		    	$.ajax({
		    		//url : "<?php echo base_url() ?>welcome/get_category",
					url:"<?php echo base_url() ?>getdata",
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


		    $('body').tooltip({
		    	selector:'[data-toggle="tooltip"]'
		    });
		}); 
	</script>