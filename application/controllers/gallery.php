<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends CI_Controller
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

        $data['galleries'] = $this->crud->get_active_records('igc_gallery');

        $this->load->view('header', $data);
        $this->load->view('other_header');
        $this->load->view('gallery/gallery');
        $this->load->view('footer');

    }
}