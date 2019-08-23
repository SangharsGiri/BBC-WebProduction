<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Testimonials extends CI_Controller
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

        $data['review'] = $this->crud->get_active_review('igc_review');

        $this->load->view('com/header', $data);

        $this->load->view('testimonial/testimonial');
        $this->load->view('com/footer');

    }
}