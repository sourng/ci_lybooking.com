<?php
foreach($results as $row){
?>
<div class="row-fluid show-grid">
    <div class="span2"><?php print $row['hotel_id']; ?></div>
    <div class="span2"><?php print $row['h_name']; ?></div>
    <div class="span2"><?php print $row['h_address']; ?></div>
    <div class="span2"><?php print $row['h_feature_image']; ?></div>
    <div class="span2"><?php print $row['h_feature_image']; ?></div>
    <div class="span2"><a class="fancybox fancybox.ajax" href="<?php echo base_url().'hotel/itemform/'.$row['hotel_id'];?>">Edit</a> | <a id="delete-item" href="<?php echo base_url().'hotel/deleteitem/'.$row['hotel_id'];?>">Delete</a></div>
</div>
<?php
}
?>
