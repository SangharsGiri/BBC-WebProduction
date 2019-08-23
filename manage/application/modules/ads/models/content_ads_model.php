<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ads extends CI_Model{
    //get all related packages

    public function get_related_packages($review_id, $package_id)
    {
        $this->db->where('review_id', $review_id);
        $this->db->where('package_id', $package_id);
        $ $result = $this->db->get('igc_ads')->result_array();
        return $result;
    }


}