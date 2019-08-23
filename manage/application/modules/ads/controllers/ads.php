<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ads extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();

        $this->load->model('crud_model','crud');

    }

    public  $table = "igc_ads";
    public $field_name = "ads_id";
    public  $redirect = "ads";

    public function index()
    {
        $data['records'] = $this->crud->get_all($this->table);
        $data['title']= "ads List";
        $this->load->view('header', $data);
        $this->load->view('ads_list');
        $this->load->view('footer');
    }

    //code to add/edit

    public function form($id=0)
    {
        if($this->input->post())
        {
            $ads_id = $this->input->post('ads_id');
            $insert['ads_name'] = $this->input->post('ads_name');
            $insert['ads_url'] = $this->input->post('ads_url');
            $insert['location'] = $this->input->post('location');
            $insert['status'] = $this->input->post('status');
            $rand = md5(rand());
                $featuredimg= $rand. str_replace(" ","",$_FILES['featured_img']['name']);
                $featuredimgtmp=$_FILES['featured_img']['tmp_name'];
                $folder_path = '../uploads/ads/';
                if($_FILES['featured_img']['name'] !="")
               {
                   $insert['featured_img']= $featuredimg;
                   move_uploaded_file($featuredimgtmp, $folder_path.$featuredimg);

               }

            if($ads_id =="")
            {
                
                $insert['created'] = date('Y-m-d:H:i:s');
                

                $result = $this->crud->insert($insert, $this->table);
                if($result)
                {
                //code to create log
                    $log['module_title']=  $insert['ads_name'];
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
                  $folder_path = '../uploads/ads/';
                $insert['updated'] = date('Y-m-d:H:i:s');

                if($_FILES['featured_img']['name'] !="")
               {
                   $pre_featured_img = $this->input->post('pre_featuredimg');

                   @unlink($folder_path.$pre_featured_img);

                   $insert['featured_img']= $featuredimg;

                   move_uploaded_file($featuredimgtmp,$folder_path.$featuredimg);

               }
                
                $result = $this->crud->update($ads_id, $this->field_name, $insert, $this->table);

                
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['ads_name'];
                    $log['action_id']= "2";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','ads has been updated.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to update the ads.');
                    redirect($this->redirect);
                }

            }


        }

        $data['detail'] = $this->crud->get_detail($id, $this->field_name, $this->table);
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit ads";
        $this->load->view('header', $data);
        $this->load->view('ads_form');
        $this->load->view('footer');
    }

      public function edit($ads_id){
 
        if($this->input->post()){
            // print_r($this->input->post());
            // exit;
            $insert['ads_name'] = $this->input->post('ads_name');
            $insert['ads_url'] = $this->input->post('ads_url');
            $insert['location'] = $this->input->post('location');
            $rand = md5(rand());
                $featuredimg= $rand. str_replace(" ","",$_FILES['featured_img']['name']);
                $featuredimgtmp=$_FILES['featured_img']['tmp_name'];
                $folder_path = '../uploads/ads/';
                if($_FILES['featured_img']['name'] !="")
               {
                   $insert['featured_img']= $featuredimg;
                   move_uploaded_file($featuredimgtmp, $folder_path.$featuredimg);

               }

            $insert['status'] = $this->input->post('status');
            $result = $this->crud->update($ads_id, 'ads_id', $insert, 'igc_ads');
            if($result)
                {
                    
                    $this->session->set_flashdata('success','New ads has been edited.');
                    redirect('ads');
                }
                else{
                    $this->session->set_flashdata('error','Unable to edit the ads.');
                    redirect('ads');
                }
               
              
        }

        $data['records'] = $this->crud->get_detail($ads_id, 'ads_id', 'igc_ads');
        $data['scripts'] =array('themes/js/form-validator/jquery.form-validator');
        $data['title']= "Edit ads";
        $this->load->view('header',$data);
        $this->load->view('ads_edit');
        $this->load->view('footer');
    }

    //function to delete

    public function delete($ads_id)
    {
        $detail = $this->crud->get_detail($ads_id, $this->field_name, $this->table);
        $result = $this->crud->delete($ads_id, $this->field_name, $this->table);
        if($result)
        {
            //code to create log
            $log['module_title']= $detail['ads_name'];
            $log['action_id']= "3";
            $this->create_log($log);

            $this->session->set_flashdata('success','ads has been deleted.');
            redirect('ads');
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the ads.');
            redirect('ads');
        }

    }


    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "ads";
        $this->db->insert('igc_user_logs', $insert);
    }


}

