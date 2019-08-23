<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jobs extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('site_settings_model', 'settings');
        $this->load->model('job_model','job');
        $this->load->model('crud_model','crud');

    }


    public function index($page=0)
    {
        if($page < 1) {
            $page = 1;
        }
        $per_page = 10;
        $startpoint = ($page * $per_page) - $per_page;
        $data['jobs'] = $this->job->get_job($startpoint, $per_page);
        $data['total'] = $this->job->count_job();
        $data['per_page'] = $per_page;
        $data['base_url'] = site_url('jobs/index/');
//        $data['meta_title'] = $detail['meta_title'];
//        $data['mebta_description'] = $detail['meta_description'];
//        $data['meta_keywords'] = $detail['meta_keywords'];
        $data['current_page'] = $page;
        $data['menu'] = '';
        $this->load->view('header', $data);

        $this->load->view('job/job_list');
        $this->load->view('footer');
    }

    public function detail($slug)
    {
        $query = $this->job->getJobDetail();
        $data['jobs'] = null;
        if($query){
            $data['jobs'] =  $query;
        }

        $this->load->view('header', $data);

        $this->load->view('job/detail');
        $this->load->view('footer');
    }
    
    public function execute_job_search()
    {
        // Retrieve the posted search term.
        $search_term = $this->input->post('search');

        // Use a model to retrieve the results.
        $data['job_result'] = $this->crud->get_job_result($search_term);

        // Pass the results to the view.
         $this->load->view('header');

        $this->load->view('job/search_results', $data);
         $this->load->view('footer');

    }
    
    


}