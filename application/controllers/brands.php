<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Brands extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('site_settings_model', 'settings');
        $this->load->model('package_model','package');
        $this->load->model('crud_model','crud');
    }

    public  $table = "igc_clients";
    public $field_name = "clients_id";
    public  $redirect = "brands";

    public function index($slug)
    {

        $detail = $this->crud->get_active_not_deleted_detail($slug, 'slug', 'igc_clients');
        print_r($detail);
        exit();

//        if(empty($detail)) {
//            redirect('home');
//        }
        $clients_id = $detail['clients_id'];
        $sub_categories = $this->package->get_subcategories(clients_id);

        if (!empty($sub_categories)) {
            $data['menu'] = "";
            $data['sub_title'] =  $detail['clients_title'];
            $data['categories'] =  $sub_categories;
            $data['meta_title'] =  $detail['meta_title'];
            $data['description'] =  $detail['description'];
            $data['meta_description'] =  $detail['meta_description'];
            $data['meta_keywords'] =  $detail['meta_keywords'];
            $data['scripts'] =  array('themes/js/form-validator/jquery.form-validator');
            $this->load->view('header', $data);
            $this->load->view('content_header');
            $this->load->view('brands/brands_listing');
            $this->load->view('footer');
        } else {
            redirect('packages/rel/' . $slug);
        }

    }

public function abc(){
        echo "Hello";
}

    public function brands_list($slug, $page=0)
    {


        $detail = $this->crud->get_active_not_deleted_detail($slug, 'slug', 'igc_clients');

//        echo $detail;
//        exit;
//        echo $detail['clients_id'];
//        echo "<pre>";
//        print_r($detail);
//        echo"</pre>";
//
//        exit();

        if(empty($detail)) {
            redirect('home');
        }
        if($page < 1) {
            $page = 1;
        }
        $per_page = 15;
        $startpoint = ($page * $per_page) - $per_page;

        //$data['packages'] =  $this->package->get_rel_packagess($detail['clients_id'],$startpoint, $per_page);


        $data['packages']= $this->package->get_rel_barnds($detail['clients_id'],$startpoint, $per_page);
//echo "<pre>";
//print_r( $data['packages']);
//echo "</pre>";
//exit();

        $data['package_total'] = $this->package->total_related_packages($slug);
        $data['slug'] = $slug;
        $data['per_page'] = $per_page;
//        $data['base_url'] = site_url('brands/rel/'.$slug);
        $data['current_page'] = $page;
        $data['sub_title'] =  $detail['clients_title']." ";
        $data['menu']="";
//        $data['meta_title'] =  $detail['meta_title'];
//        $data['meta_description'] =  $detail['meta_description'];
//        $data['meta_keywords'] =  $detail['meta_keywords'];
//        $data['description'] =  $detail['description'];
        $data['scripts'] = array('themes/js/form-validator/jquery.form-validator');
        $this->load->view('header', $data);
        $this->load->view('list_header');
        $this->load->view('brands/brands_list');
        $this->load->view('footer');
    }







}