<h3>Items <a class="btn fancybox fancybox.ajax add-item-btn" href="<?php echo base_url().'index.php/store/itemform/';?>">Add Item</a></h3>
<div class="grid-container bs-docs-grid">
	<div class="grid-container-head bs-docs-grid">
	<?php
		$sel_col_id = $sel_col_name = $sel_col_brand = $sel_col_model = $sel_col_date_added = "";
		if($orderby=='hotel_id'){ $sel_col_id = $order == 'asc' ? "<span>^</span>" :"<span>v</span>";}
		if($orderby=='h_name'){ $sel_col_name = $order == 'asc' ? "<span>^</span>" :"<span>v</span>";}
		if($orderby=='star_rating'){ $sel_col_brand = $order == 'asc' ? "<span>^</span>" :"<span>v</span>";}
		if($orderby=='model'){ $sel_col_model = $order == 'asc' ? "<span>^</span>" :"<span>v</span>";}
		if($orderby=='date_added'){ $sel_col_date_added = $order == 'asc' ? "<span>^</span>" :"<span>v</span>";}

		$order = $order == 'asc' ? 'desc' :'asc';
	?>
		<div class="row-fluid show-grid">
			<div class="span2"><a href="<?php echo base_url().'hotel/items/id/'.$order?>">ID <?php echo $sel_col_id; ?></a></div>
			<div class="span2"><a href="<?php echo base_url().'hotel/items/name/'.$order?>">Name <?php echo $sel_col_name; ?></a></div>
			<div class="span2"><a href="<?php echo base_url().'hotel/items/brand/'.$order?>">Brand <?php echo $sel_col_brand; ?></a></div>
			<div class="span2"><a href="<?php echo base_url().'hotel/items/model/'.$order?>">Model <?php echo $sel_col_model; ?></a></div>
			<div class="span2"><a href="<?php echo base_url().'hotel/items/date_added/'.$order?>">Date Added <?php echo $sel_col_date_added; ?></a></div>
			<div class="span2">Action</div>
		</div>
	</div>
	<div class="grid-container-body bs-docs-grid">
		<?php
		$this->load->view('items/item-list',array('results'=>$results));
		?>
	</div>
	<div class="grid-container-footer paginations bs-docs-grid">
		<?php echo $pagination_link; ?>
	</div>
</div>