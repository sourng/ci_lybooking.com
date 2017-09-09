<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hotels extends CI_Model{
    function getRows($params = array()){
       // $order_by=$params['start'];
        $this->db->select('*');
        $this->db->from('v_list_hotels');
        //$this->db->join('hotel_rooms AS hr','h.hotel_id=hotel_rooms.hotel_id','left');
        if(array_key_exists("starorder",$params)){
            $this->db->where('star_rating',$params['starorder']);
        }else{
            //$this->db->where('star_rating',4);
        }        

       // $this->db->order_by('star_rating','desc');        
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        
        //$query = $this->db->get();
        $query = $this->db->get();
        
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }

    function FindRows($params = array()){

       // $order_by=$params['start'];

        $this->db->select('*');
        $this->db->from('v_list_hotels');

        //$this->db->join('hotel_rooms AS hr','h.hotel_id=hotel_rooms.hotel_id','left');
        if(array_key_exists("starorder",$params)){
            $this->db->where('star_rating',$params['starorder']);
        }else{
            //$this->db->where('star_rating',4);
        }
        $this->db->where('destinations',$params['find']);

       // $this->db->order_by('star_rating','desc');
        
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        
        //$query = $this->db->get();
        $query = $this->db->get();
        
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }
    

function get($limit=5, $start=0, $orderby="id", $order="ASC"){
             $this->db->select('*');
             $this->db->from('v_list_hotels');
        
		//$this->db->select('item_id as id, items.name as name, models.name as model, brands.name as brand, created_at as date_added');
		//$this->db->from('items');
		//$this->db->join('models', 'items.model_id = models.model_id');
		//$this->db->join('brands', 'items.brand_id = brands.brand_id');
		$this->db->limit($limit, $start);
		//$this->db->order_by($orderby, $order);
		$query = $this->db->get();
		return $query->result_array();
    }
    
    function itemsCount(){
		return $this->db->count_all_results('items');
    }
    
}