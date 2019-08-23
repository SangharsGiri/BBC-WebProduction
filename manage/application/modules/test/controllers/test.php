<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();

        //$this->load->model('hotel_model','hotel');
        $this->load->model('crud_model', 'crud');

    }
   // public $redirect = "hotel";

    public function  index()
    {

        $data['records'] = $this->crud->get_not_deleted('igc_test');
        // print_r($data['records']);
        // exit;
        $data['title']= "test List";
        $this->load->view('header',$data);
        $this->load->view('test_list');
        $this->load->view('footer');
    }

    public function form($test_id=0){

        if($this->input->post()){
            // print_r($this->input->post());
            // exit;
            $insert['title'] = $this->input->post('title');
            $insert['publish_status'] = $this->input->post('publish_status');
            $insert['link'] = $this->input->post('link');
            $rand = md5(rand());
            $test_image= $rand. str_replace(" ","",$_FILES['test_image']['name']);
            $testimgtmp=$_FILES['test_image']['tmp_name'];
            $folder_path = '../uploads/test/';
                if($_FILES['test_image']['name'] !="")
                {
                    $insert['test_image']= $test_image;
                    move_uploaded_file($testimgtmp, $folder_path.$test_image);

                }
            $insert['body'] = $this->input->post('body');
            $insert['created'] = date('Y-m-d:H:i:s');
            $insert['updated'] = date('Y-m-d:H:i:s');
            $result = $this->crud->insert($insert, 'igc_test');
            if($result)
                {
                    
                    $this->session->set_flashdata('success','New test has been inserted.');
                    redirect('test');
                }
                else{
                    $this->session->set_flashdata('error','Unable to insert the new test.');
                    redirect('test');
                }
              
        }

        $data['records'] = $this->crud->get_all('igc_test');
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add test";
        $this->load->view('header',$data);
        $this->load->view('test_form');
        $this->load->view('footer');
    }

    public function edit($test_id){

        if($this->input->post()){
            // print_r($this->input->post());
            // exit;
            $insert['title'] = $this->input->post('title');
            $insert['publish_status'] = $this->input->post('publish_status');
            $insert['link'] = $this->input->post('link');
            $rand = md5(rand());
            $folder_path = '../uploads/test/';
            $test_image= $rand. str_replace(" ","",$_FILES['test_image']['name']);
            $testimgtmp=$_FILES['test_image']['tmp_name'];
                if($_FILES['test_image']['name'] !="")
                {
                    $insert['test_image']= $test_image;

                        move_uploaded_file($testimgtmp, $folder_path.$test_image);

                }
            $insert['body'] = $this->input->post('body');
            $insert['updated'] = date('Y-m-d:H:i:s');
            $result = $this->crud->update($test_id, 'test_id', $insert, 'igc_test');
            if($result)
                {
                    
                    $this->session->set_flashdata('success','New test has been edited.');
                    redirect('test');
                }
                else{
                    $this->session->set_flashdata('error','Unable to edit the test.');
                    redirect('test');
                }
              
        }

        $data['records'] = $this->crud->get_detail($test_id, 'test_id', 'igc_test');
        $data['scripts'] =array('themes/js/form-validator/jquery.form-validator');
        $data['title']= "Edit test";
        $this->load->view('header',$data);
        $this->load->view('test_edit');
        $this->load->view('footer');
    }

    //code to delete the the  setting

    public function delete($test_id)
    {
        $test= $this->crud->get_detail($test_id, 'test_id', 'igc_test');


        $result = $this->crud->soft_delete($test_id, 'test_id', 'igc_test');

        if($result)
        {
            //code to create log
            $log['module_title']= $test['title'];
            $log['action_id']= "3";
            $this->create_log($log);

            $this->session->set_flashdata('success','test Information has been deleted.');
            redirect('test');
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the Information.');
            redirect('test');
        }
    }


    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "test";
        $this->db->insert('igc_user_logs', $insert);
    }

   

}