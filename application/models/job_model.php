<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Job_model extends CI_Model{
    public function get_job($start_point=0, $per_page=0)
    {
        $query = $this->db->query("select * from igc_news
    where publish_status='1' and delete_status='0' order by created desc limit
		{$start_point},{$per_page}");
        $result = $query->result_array();
        return $result;
    }

    public function count_job()
    {
        $this->db->where('publish_status','1');
        $this->db->where('delete_status','0');
        $result = $this->db->get('igc_news')->num_rows();
        return $result;
    }

    function getJobDetail(){
        $this->db->select("news_id,news_title,job_location,no_of_vacancy,basic_salary,news_content,meta_description,meta_keywords,meta_title,publish_date,expire_date,created,updated");
        $this->db->from('igc_news');
        $query = $this->db->get();
        return $query->result();
    }

}