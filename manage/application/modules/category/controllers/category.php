<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class category extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();

        $this->load->model('crud_model','crud');

    }

    public  $table = "igc_category";
    public $field_name = "category_id";
    public  $redirect = "category";

    public function index()
    {
        $data['records'] = $this->crud->get_all($this->table);
        $data['title']= "Content Category List";
        $this->load->view('header', $data);
        $this->load->view('category_list');
        $this->load->view('footer');
    }

    //code to add/edit

    public function form($id=0)
    {
        if($this->input->post())
        {
            $category_id = $this->input->post('category_id');
            $insert['category_name'] = $this->input->post('category_name');

            if($category_id =="")
            {
                $insert['slug'] = $this->input->post('slug');
                $insert['rank'] = $this->input->post('rank');
                $insert['show_in_menu'] = $this->input->post('show_in_menu');
                $insert['status'] = $this->input->post('status');
                $insert['created'] = date('Y-m-d:H:i:s');
                $result = $this->crud->insert($insert, $this->table);
                if($result)
                {
                //code to create log
                    $log['module_title']=  $insert['category_name'];
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

                $result = $this->crud->update($category_id, $this->field_name, $insert, $this->table);

                
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['category_name'];
                    $log['action_id']= "2";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','Content Category has been updated.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to update the Content Category.');
                    redirect($this->redirect);
                }

            }


        }

        $data['detail'] = $this->crud->get_detail($id, $this->field_name, $this->table);
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit Content Category";
        $this->load->view('header', $data);
        $this->load->view('category_form');
        $this->load->view('footer');
    }

      public function edit($category_id){
 
        if($this->input->post()){
            // print_r($this->input->post());
            // exit;
            $insert['category_name'] = $this->input->post('category_name');
            $insert['slug'] = $this->input->post('slug');
            $insert['rank'] = $this->input->post('rank');
            $insert['show_in_menu'] = $this->input->post('show_in_menu');
            $insert['status'] = $this->input->post('status');
            $result = $this->crud->update($category_id, 'category_id', $insert, 'igc_category');
            if($result)
                {
                    
                    $this->session->set_flashdata('success','New category has been edited.');
                    redirect('category');
                }
                else{
                    $this->session->set_flashdata('error','Unable to edit the category.');
                    redirect('category');
                }
              
        }
        $insert['status'] = $this->input->post('status');
        $data['records'] = $this->crud->get_detail($category_id, 'category_id', 'igc_category');
        $data['scripts'] =array('themes/js/form-validator/jquery.form-validator');
        $data['title']= "Edit category";
        $this->load->view('header',$data);
        $this->load->view('category_edit');
        $this->load->view('footer');
    }

    //function to delete

    public function delete($category_id)
    {
        $detail = $this->crud->get_detail($category_id, $this->field_name, $this->table);
        $result = $this->crud->delete($category_id, $this->field_name, $this->table);
        if($result)
        {
            //code to create log
            $log['module_title']= $detail['category_name'];
            $log['action_id']= "3";
            $this->create_log($log);

            $this->session->set_flashdata('success','Content Category has been deleted.');
            redirect('category');
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the Content Category.');
            redirect('category');
        }

    }


    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "category";
        $this->db->insert('igc_user_logs', $insert);
    }


}

