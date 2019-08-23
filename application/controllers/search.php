<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('package_model','package');
        $this->load->model('crud_model', 'crud');
        $this->load->model('content_model','content');
        $this->load->model('site_settings_model', 'site_settings');
        $this->load->library('cart');
    }

//    public function index()
//    {
//        $data['cv'] = $this->crud->get_active_cv('igc_job');
//
//        $this->load->view('header');
//        $this->load->view('job/cv_list');
//        $this->load->view('footer');
//    }





    public function index()
    {
//        $data['last_entries'] = $this->crud->get_active_records('igc_job');
        $data['last_entries'] = $this->crud->get_last_ten_entries();
        $this->load->view('header');
        $this->load->view('other_header');
        $this->load->view('job/search_list', $data);
        $this->load->view('footer');


    }




 public function execute_search()
    {
        // Retrieve the posted search term.
        $search_term = $this->input->post('search');



        // Use a model to retrieve the results.
        $data['results'] = $this->crud->get_results($search_term);


//        print_r($data['results']);
//        exit();

        // Pass the results to the view.
         $this->load->view('header');
//        $this->load->view('other_header');
        $this->load->view('search_results', $data);
         $this->load->view('footer');

    }


    public function execute_english()
    {
        // Retrieve the posted search term.
        $search_term = $this->input->post('search');



        // Use a model to retrieve the results.
        $data['results'] = $this->crud->get_results_english($search_term);

//        print_r($data['results']);
//        exit();

        // Pass the results to the view.
        $this->load->view('header');
//        $this->load->view('other_header');
        $this->load->view('search_results', $data);
        $this->load->view('footer');

    }


    public function executes_search()
    {
        // Retrieve the posted search term.
        $search_term = $this->input->post('search');
        $search_terms = $this->input->post('property_type');


        // Use a model to retrieve the results.
        $data['results'] = $this->crud->get_results($search_term, $search_terms );

//        print_r($data['results']);
//        exit();

        // Pass the results to the view.
        $this->load->view('header_ar');
//        $this->load->view('other_header');
        $this->load->view('search_results_ar', $data);
        $this->load->view('footer_ar');

    }





}