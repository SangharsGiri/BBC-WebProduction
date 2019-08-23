<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class post extends MX_Controller{
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

        $data['records'] = $this->crud->get_not_deleted('igc_post');
        // print_r($data['records']);
        // exit;
        $data['title']= "post List";
        $this->load->view('header',$data);
        $this->load->view('post_list');
        $this->load->view('footer');
    }

    public function form($post_id=0){

        if($this->input->post()){
            // print_r($this->input->post());
            // exit;
            $insert['title'] = $this->input->post('title');
            $insert['publish_status'] = $this->input->post('publish_status');
            $insert['link'] = $this->input->post('link');
            $rand = md5(rand());
            $post_image= $rand. str_replace(" ","",$_FILES['post_image']['name']);
            $postimgtmp=$_FILES['post_image']['tmp_name'];
            $folder_path = '../uploads/post/';
                if($_FILES['post_image']['name'] !="")
                {
                    $insert['post_image']= $post_image;
                    move_uploaded_file($postimgtmp, $folder_path.$post_image);

                }
            $insert['body'] = $this->input->post('body');
            $insert['created'] = date('Y-m-d:H:i:s');
            $insert['updated'] = date('Y-m-d:H:i:s');
            $result = $this->crud->insert($insert, 'igc_post');
            if($result)
                {
                    
                    $this->session->set_flashdata('success','New post has been inserted.');
                    redirect('post');
                }
                else{
                    $this->session->set_flashdata('error','Unable to insert the new post.');
                    redirect('post');
                }
              
        }

        $data['records'] = $this->crud->get_all('igc_post');
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add post";
        $this->load->view('header',$data);
        $this->load->view('post_form');
        $this->load->view('footer');
    }

    public function edit($post_id){

        if($this->input->post()){
            // print_r($this->input->post());
            // exit;
            $insert['title'] = $this->input->post('title');
            $insert['publish_status'] = $this->input->post('publish_status');
            $insert['link'] = $this->input->post('link');
            $rand = md5(rand());
            $folder_path = '../uploads/post/';
            $post_image= $rand. str_replace(" ","",$_FILES['post_image']['name']);
            $postimgtmp=$_FILES['post_image']['tmp_name'];
                if($_FILES['post_image']['name'] !="")
                {
                    $insert['post_image']= $post_image;

                        move_uploaded_file($postimgtmp, $folder_path.$post_image);

                }
            $insert['body'] = $this->input->post('body');
            $insert['updated'] = date('Y-m-d:H:i:s');
            $result = $this->crud->update($post_id, 'post_id', $insert, 'igc_post');
            if($result)
                {
                    
                    $this->session->set_flashdata('success','New post has been edited.');
                    redirect('post');
                }
                else{
                    $this->session->set_flashdata('error','Unable to edit the post.');
                    redirect('post');
                }
              
        }

        $data['records'] = $this->crud->get_detail($post_id, 'post_id', 'igc_post');
        $data['scripts'] =array('themes/js/form-validator/jquery.form-validator');
        $data['title']= "Edit post";
        $this->load->view('header',$data);
        $this->load->view('post_edit');
        $this->load->view('footer');
    }

    //code to delete the the  setting

    public function delete($post_id)
    {
        $post= $this->crud->get_detail($post_id, 'post_id', 'igc_post');


        $result = $this->crud->soft_delete($post_id, 'post_id', 'igc_post');

        if($result)
        {
            //code to create log
            $log['module_title']= $post['title'];
            $log['action_id']= "3";
            $this->create_log($log);

            $this->session->set_flashdata('success','post Information has been deleted.');
            redirect('post');
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the Information.');
            redirect('post');
        }
    }


    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "post";
        $this->db->insert('igc_user_logs', $insert);
    }

   

}