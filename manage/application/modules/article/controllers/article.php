<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class article extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();

        $this->load->model('crud_model','crud');
        $this->load->model('Article_model','categoriess');

    }

    public  $table = "igc_article";
    public $field_name = "article_id";
    public  $redirect = "article";

    public function index()
    {
        $data['records'] = $this->crud->get_all($this->table);
        $data['title']= "Content article List";
        $this->load->view('header', $data);
        $this->load->view('article_list');
        $this->load->view('footer');
    }

    //code to add/edit

    public function form($id=0)
    {
        $data['categories']= $this->categoriess->get_all_active_category();
        //print_r($data['categories']);
        //exit();
        if($this->input->post())
        {
            $article_id = $this->input->post('article_id');
            $rand = md5(rand());
            $featured_image= $rand. str_replace(" ","",$_FILES['featured_image']['name']);
            $featuredimgtmp=$_FILES['featured_image']['tmp_name'];
            $folder_path = '../uploads/article/';
                if($_FILES['featured_image']['name'] !="")
                {
                    $insert['featured_image']= $featured_image;
                    move_uploaded_file($featuredimgtmp, $folder_path.$featured_image);
                    move_uploaded_file($featuredimgtmp, $folder_path.$featured_image);

                }
            $insert['title'] = $this->input->post('title');

            if($article_id =="")
            {
                $insert['sub-title'] = $this->input->post('sub-title');
                $insert['slug'] = $this->input->post('slug');
                $insert['body'] = $this->input->post('body');
                $insert['category_id'] = $this->input->post('category_id');
                $insert['tag-line'] = $this->input->post('tag-line');
                $insert['by-line'] = $this->input->post('by-line');
                $insert['show_in_menu'] = $this->input->post('show_in_menu');
                $insert['status'] = $this->input->post('status');
                $insert['created'] = date('Y-m-d:H:i:s');
                $result = $this->crud->insert($insert, $this->table);
                if($result)
                {
                //code to create log
                    $log['module_title']=  $insert['title'];
                    $log['action_id']= "1";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','New Review has been added.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to add Review.');
                    redirect($this->redirect);
                }

            }
            else{

                $insert['updated'] = date('Y-m-d:H:i:s');

                $result = $this->crud->update($article_id, $this->field_name, $insert, $this->table);

                
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['article_name'];
                    $log['action_id']= "2";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','Content article has been updated.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to update the Content article.');
                    redirect($this->redirect);
                }

            }


        }

        $data['detail'] = $this->crud->get_detail($id, $this->field_name, $this->table);
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit Content article";
        $this->load->view('header', $data);
        $this->load->view('article_form');
        $this->load->view('footer');
    }

      public function edit($article_id){
 
        if($this->input->post()){
            // print_r($this->input->post());
            // exit;
            $rand = md5(rand());
            $featured_image= $rand. str_replace(" ","",$_FILES['featured_image']['name']);
            $featuredimgtmp=$_FILES['featured_image']['tmp_name'];
            $folder_path = '../uploads/article/';
                if($_FILES['featured_image']['name'] !="")
                {
                    $insert['featured_image']= $featured_image;
                    move_uploaded_file($featuredimgtmp, $folder_path.$featured_image);
                    move_uploaded_file($featuredimgtmp, $folder_path.$featured_image);

                }
            $insert['title'] = $this->input->post('title');

            $insert['sub-title'] = $this->input->post('sub-title');
                $insert['slug'] = $this->input->post('slug');
                $insert['body'] = $this->input->post('body');
                $insert['category_id'] = $this->input->post('category_id');
                $insert['tag-line'] = $this->input->post('tag-line');
                $insert['by-line'] = $this->input->post('by-line');
                $insert['show_in_menu'] = $this->input->post('show_in_menu');
                $insert['status'] = $this->input->post('status');
            $result = $this->crud->update($article_id, 'article_id', $insert, 'igc_article');
            if($result)
                {
                    
                    $this->session->set_flashdata('success','New article has been edited.');
                    redirect('article');
                }
                else{
                    $this->session->set_flashdata('error','Unable to edit the article.');
                    redirect('article');
                }
              
        }

        $data['records'] = $this->crud->get_detail($article_id, 'article_id', 'igc_article');
        $data['scripts'] =array('themes/js/form-validator/jquery.form-validator');
        $data['title']= "Edit article";
        $this->load->view('header',$data);
        $this->load->view('article_edit');
        $this->load->view('footer');
    }

    //function to delete

    public function delete($article_id)
    {
        $detail = $this->crud->get_detail($article_id, $this->field_name, $this->table);
        $result = $this->crud->delete($article_id, $this->field_name, $this->table);
        if($result)
        {
            //code to create log
            $log['module_title']= $detail['article_name'];
            $log['action_id']= "3";
            $this->create_log($log);

            $this->session->set_flashdata('success','Content article has been deleted.');
            redirect('article');
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the Content article.');
            redirect('article');
        }

    }


    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "article";
        $this->db->insert('igc_user_logs', $insert);
    }


}

