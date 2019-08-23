<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Article_model extends CI_Model{
    //get all related packages

    public function get_all_active_category()
    {
        $this->db->where('status','ACTIVE');
       $this->db->order_by('created', 'DESC');
       $result = $this->db->get('igc_category')->result_array();
       return $result;
    }


}