<?php
//$config['base_url'] =base_url()."hotels/index";
//$config['per_page'] = 2;
//$config['uri_segment'] = 2;
$config['num_links'] = 5;
//$config['page_query_string'] = TRUE;
 $config['use_page_numbers'] = TRUE;
$config['query_string_segment'] = 'page';
$config['full_tag_open'] = '<div class="page-navigation-cn"><ul class="page-navigation">';
$config['full_tag_close'] = '</ul></div><!--pagination-->';
$config['first_link'] = '&laquo; First';
$config['first_tag_open'] = '<li class="prev page">';
$config['first_tag_close'] = '</li>';
$config['last_link'] = 'Last &raquo;';
$config['last_tag_open'] = '<li class="next page">';
$config['last_tag_close'] = '</li>';
$config['next_link'] = 'Next &rarr;';
$config['next_tag_open'] = '<li class="next page">';
$config['next_tag_close'] = '</li>';
$config['prev_link'] = '&larr; Previous';
$config['prev_tag_open'] = '<li class="prev page">';
$config['prev_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="current"><a href="">';
$config['cur_tag_close'] = '</a></li>';
$config['num_tag_open'] = '<li class="page">';
$config['num_tag_close'] = '</li>';
// $config['display_pages'] = FALSE;
// 
$config['anchor_class'] = 'follow_link';