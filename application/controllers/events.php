<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Events extends CI_Controller
{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('login_model', 'login');
        $this->load->model('package_model', 'package');
        $this->load->model('crud_model', 'crud');
        $this->load->model('content_model', 'content');


    }

    public function index()
    {

        $data['portfolios'] = $this->crud->get_active_records('igc_portfolio');

        $this->load->view('header', $data);
        $this->load->view('other_header');
        $this->load->view('events/events');
        $this->load->view('footer');

    }
}