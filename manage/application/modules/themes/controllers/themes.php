<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Themes extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->load->model('themes_model','content');
        $this->load->model('crud_model','crud');
        $this->load->model('site_settings_model','site_settings');
        $this->load->model('mail_setting/mail_setting_model','server');

        $this->load->library('encrypt');

    }

    public function index()
    {
        $data['records'] = $this->content->get_content_list();

        $data['title']= "themes List";
        $this->load->view('header', $data);
        $this->load->view('themes_list');
        $this->load->view('footer');
    }

    public function form($id=0)
    {
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->library('form_validation');
        if($this->input->post())
        {

             $this->form_validation->set_rules('content_title', 'content_title','required' );
            $this->form_validation->set_rules('content_page_title', 'content_page_title', 'required|callback_check_name_exist['.$this->input->post('content_id').']');
            $this->form_validation->set_rules('content_body', 'content_body');
            $this->form_validation->set_rules('user_id', 'user_id');
            $this->form_validation->set_rules('content_type', 'content_type');
            $this->form_validation->set_rules('meta_description', 'meta_description');
            $this->form_validation->set_rules('meta_keywords', 'meta_keywords');
            $this->form_validation->set_rules('meta_title', 'meta_title');
            $this->form_validation->set_rules('category_id', 'category_id');
            $this->form_validation->set_rules('about_service', 'about_service');
            $this->form_validation->set_rules('about_service_desc', 'about_service_desc');
             $this->form_validation->set_rules('about_service_link', 'about_service_link');
            $this->form_validation->set_rules('content_summary', 'content_summary');
             
            $this->form_validation->set_rules('about_choose', 'about_choose');
            $this->form_validation->set_rules('about_choose_desc', 'about_choose_desc');
             $this->form_validation->set_rules('about_choose_link', 'about_choose_link');
             
            $this->form_validation->set_rules('about_support', 'about_support');
            $this->form_validation->set_rules('about_support_desc', 'about_support_desc');
            $this->form_validation->set_rules('about_support_link', 'about_support_link');
            
            $this->form_validation->set_rules('publish_status', 'publish_status');
            $this->form_validation->set_rules('show_on_menu', 'show_on_menu');
            $this->form_validation->set_rules('tab1', 'tab1');
            $this->form_validation->set_rules('description1', 'description1');
            $this->form_validation->set_rules('tab2', 'tab2');
            $this->form_validation->set_rules('description2', 'description2');
            $this->form_validation->set_rules('tab3', 'tab3');
            $this->form_validation->set_rules('description3', 'description');
            $this->form_validation->set_rules('tab4', 'tab');
            $this->form_validation->set_rules('description4', 'description4');
            $this->form_validation->set_rules('tab5', 'tab5');
            $this->form_validation->set_rules('description5', 'description5');

            if ($this->form_validation->run()) {
            $new_tags = $this->input->post('content_tags');
            $folder_path = '../uploads/content/';
            $content_id = $this->input->post('content_id');
                $insert['user_id'] = $this->input->post('user_id');
            $insert['content_title'] = $this->input->post('content_title') ;
            $insert['content_page_title'] = $this->input->post('content_page_title');
            $insert['content_body'] = $this->input->post('content_body');
            $insert['meta_description'] = $this->input->post('meta_description');
            $insert['meta_keywords'] = $this->input->post('meta_keywords');
            $insert['meta_title'] = $this->input->post('meta_title');
                $insert['category_id'] = $this->input->post('category_id');
            $insert['about_service'] = $this->input->post('about_service');
            $insert['about_service_desc'] = $this->input->post('about_service_desc');
             $insert['about_service_link'] = $this->input->post('about_service_link');
                $insert['content_summary'] = $this->input->post('content_summary');
             
            $insert['about_choose'] = $this->input->post('about_choose');
            $insert['about_choose_desc'] = $this->input->post('about_choose_desc');
             $insert['about_choose_link'] = $this->input->post('about_choose_link');
             
            $insert['about_support'] = $this->input->post('about_support');
            $insert['about_support_desc'] = $this->input->post('about_support_desc');
             $insert['about_support_link'] = $this->input->post('about_support_link');


                $insert['content_type'] = $this->input->post('content_type');
            $insert['publish_status'] = $this->input->post('publish_status');
            $insert['show_on_menu'] = $this->input->post('show_on_menu');
            $insert['delete_status'] = "0";
            $insert['content_url'] = strtolower(str_replace(" ","-",$insert['content_page_title']));
           // $insert['parent_id'] = $this->input->post('parent_id');
            $rand = md5(rand());
            $featuredimg= $rand. str_replace(" ","",$_FILES['featured_img']['name']);
            $featuredimgtmp=$_FILES['featured_img']['tmp_name'];

                $paralleximg= $rand. str_replace(" ","",$_FILES['parallex_img']['name']);
                $paralleximgtmp=$_FILES['parallex_img']['tmp_name'];


            //code to check url

            // $check_url =  $this->crud->check_url($content_id, 'content_id', $url, 'content_url','igc_content');
            // if(!empty($check_url))
            // {
            //     $insert['content_url']= $url."-".rand(1, 50);
            // }
            // else
            // {
            //     $insert['content_url'] = $url;
            // }


            if($content_id =="")
            {
                $insert['parent_id']= "0";
                $insert['position']= "0";
                $insert['group_id']= "1";
                $insert['created'] = date('Y-m-d:H:i:s');
                if($_FILES['featured_img']['name'] !="")
                {
                    $insert['featured_img']= $featuredimg;

                        move_uploaded_file($featuredimgtmp,$folder_path.$featuredimg);

                }

                if($_FILES['parallex_img']['name'] !="")
                {
                    $insert['parallex_img']= $paralleximg;

                    move_uploaded_file($paralleximgtmp,$folder_path.$paralleximg);

                }

            if($insert['content_type'] == "Page" || "Services")
            {
                $insert['parent_id'] = $this->input->post('parent_id');
                $result = $this->content->content_insert($insert);
                //code to add tags
                $this->add_tags($result, $new_tags);
                $inserts['tab1'] = $this->input->post('tab1');
                $inserts['description1'] = $this->input->post('description1');
                $inserts['tab2'] = $this->input->post('tab2');
                $inserts['description2'] = $this->input->post('description2');
                $inserts['tab3'] = $this->input->post('tab3');
                $inserts['description3'] = $this->input->post('description3');
                $inserts['tab4'] = $this->input->post('tab4');
                $inserts['description4'] = $this->input->post('description4');
                $inserts['tab5'] = $this->input->post('tab5');
                $inserts['description5'] = $this->input->post('description5');
                $inserts['tab6'] = $this->input->post('tab6');
                $inserts['description6'] = $this->input->post('description6');

                $inserts['content_id']= $result;


                $this->content->tab_insert($inserts);

                if($result)
                {
                    //code to create log
                    $log['module_title']= $insert['content_page_title'];
                    $log['action_id']= "1";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','New Content has been inserted.');
                    redirect('themes');
                }
                else{
                    $this->session->set_flashdata('error','Unable to insert the new content.');
                    redirect('themes');
                }
            }
            else{

                $category = $this->input->post('category_id');

                //code to check if category exist or not
                if($category == "")
                {
                    $cat['category_name'] = "Uncatgeorized";
                    $results = $this->content->insert_content_category($cat);
                    $insert['category_id'] = $results;

                }
                else{
                    $insert['category_id'] = $category;
                }


                $result = $this->content->content_insert($insert);
                if($result)
                {
                    //code to create log
                    $log['module_title']= $insert['content_page_title'];
                    $log['action_id']= "1";
                    $this->create_log($log);
                    //code to add tags
                    $this->add_tags($result, $new_tags);

                    $this->session->set_flashdata('success','New Content has been inserted.');
                    redirect('themes');
                }
                else{
                    $this->session->set_flashdata('error','Unable to insert the new content.');
                    redirect('themes');
                }

            }
           }
            else{

                $insert['updated'] = date('Y-m-d:H:i:s');
                if($_FILES['featured_img']['name'] !="")
                {
                    $pre_featured_img = $this->input->post('pre_featuredimg');

                    @unlink($folder_path.$pre_featured_img);

                    $insert['featured_img']= $featuredimg;

                    move_uploaded_file($featuredimgtmp,$folder_path.$featuredimg);

                }

                if($_FILES['parallex_img']['name'] !="")
                {
                    $pre_parallex_img = $this->input->post('pre_paralleximg');

                    @unlink($folder_path.$pre_parallex_img);

                    $insert['parallex_img']= $paralleximg;

                    move_uploaded_file($paralleximgtmp,$folder_path.$paralleximg);

                }

                if($insert['content_type'] == "Page" || "Services")
                {

//                    print_r($insert);
//                    exit;
                    $result = $this->content->content_update($insert, $content_id);
                    //code to add tags
                    $this->add_tags($content_id, $new_tags);
                    $inserts['tab1'] = $this->input->post('tab1');
                    $inserts['description1'] = $this->input->post('description1');
                    $inserts['tab2'] = $this->input->post('tab2');
                    $inserts['description2'] = $this->input->post('description2');
                    $inserts['tab3'] = $this->input->post('tab3');
                    $inserts['description3'] = $this->input->post('description3');
                    $inserts['tab4'] = $this->input->post('tab4');
                    $inserts['description4'] = $this->input->post('description4');
                    $inserts['tab5'] = $this->input->post('tab5');
                    $inserts['description5'] = $this->input->post('description5');
                    $inserts['tab6'] = $this->input->post('tab6');
                    $inserts['description6'] = $this->input->post('description6');

                    $tab_data = $this->content->tab_detail($content_id);

                    if(!empty($tab_data))
                    {
                        $this->content->tab_update($inserts, $content_id);
                    }
                    else{
                        $inserts['content_id'] = $content_id;
                        $this->content->tab_insert($inserts);
                    }



                    if($result)
                    {
                        //code to create log
                        $log['module_title']= $insert['content_page_title'];
                        $log['action_id']= "2";
                        $this->create_log($log);
                        $this->session->set_flashdata('success','Content has been updated.');
                        redirect('themes');
                    }
                    else{
                        $this->session->set_flashdata('error','Unable to update the content.');
                        redirect('themes');
                    }
                }
                else
                {

                        $category = $this->input->post('category_id');

                    //code to check if category exist or not
                    if($category == "")
                    {
                        $cat['category_name'] = "Uncatgeorized";
                        $results = $this->content->insert_content_category($cat);
                        $insert['category_id'] = $results;

                    }
                    else{
                        $insert['category_id'] = $category;
                    }

                    $result = $this->content->content_update($insert, $content_id);
                    if($result)
                    {
                        //code to create log
                        $log['module_title']= $insert['content_page_title'];
                        $log['action_id']= "2";
                        $this->create_log($log);

                        //code to add tags
                        $this->add_tags($content_id, $new_tags);
                        $this->session->set_flashdata('success','Content has been updated.');
                        redirect('themes');
                    }
                    else{
                        $this->session->set_flashdata('error','Unable to update the content.');
                        redirect('themes');
                    }

                }

            }
        }

        }


        $content = $this->content->get_content_detail($id);
        $tab = $this->content->tab_detail($id);

        $data['content'] = array_merge($content, $tab);

        $data['categories'] = $this->crud->get_active_records('igc_package_category');;
        $data['parent_pages'] = $this->content->get_parent_page();


        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit themes";
        $this->load->view('header', $data);
        $this->load->view('themes_form');
        $this->load->view('footer');
    }







    public function slider_content($content_id){
        if(strlen($content_id) <= 0){ redirect('themes'); }
        $content_id = $content_id;
        $checkProduct = $this->crud->get_detail($content_id, "content_id", "igc_content");
        if(count($checkProduct) > 0){
            $update['updated'] = date('Y-m-d h:i:s');
            $update['slider_content'] = "1";

            $this->crud->move_to_trash($content_id,"content_id", $update, "igc_content");
            $this->session->set_flashdata('success','Successfully Updated.');
            redirect('themes');
        }else{
            $this->session->set_flashdata('error','Error! Sorry unable to update');
            redirect('themes');
        }
    }

    public function non_slider_content($content_id){
        if(strlen($content_id) <= 0){ redirect('themes'); }
        $content_id = $content_id;
        $checkProduct = $this->crud->get_detail($content_id, "content_id", "igc_content");
        if(count($checkProduct) > 0){
            $update['updated'] = date('Y-m-d h:i:s');
            $update['slider_content'] = "0";

            $this->crud->move_to_trash($content_id,"content_id", $update, "igc_content");
            $this->session->set_flashdata('success','Successfully updated.');
            redirect('themes');
        }else{
            $this->session->set_flashdata('error','Error! Sorry unable to update');
            redirect('themes');
        }
    }


    public function featured_content($content_id){
        if(strlen($content_id) <= 0){ redirect('themes'); }
        $content_id = $content_id;
        $checkProduct = $this->crud->get_detail($content_id, "content_id", "igc_content");
        if(count($checkProduct) > 0){
            $update['updated'] = date('Y-m-d h:i:s');
            $update['featured_content'] = "1";

            $this->crud->move_to_trash($content_id,"content_id", $update, "igc_content");
            $this->session->set_flashdata('success','Successfully Updated.');
            redirect('themes');
        }else{
            $this->session->set_flashdata('error','Error! Sorry unable to update');
            redirect('themes');
        }
    }

    public function non_featured_content($content_id){
        if(strlen($content_id) <= 0){ redirect('themes'); }
        $content_id = $content_id;
        $checkProduct = $this->crud->get_detail($content_id, "content_id", "igc_content");
        if(count($checkProduct) > 0){
            $update['updated'] = date('Y-m-d h:i:s');
            $update['featured_content'] = "0";

            $this->crud->move_to_trash($content_id,"content_id", $update, "igc_content");
            $this->session->set_flashdata('success','Successfully updated.');
            redirect('themes');
        }else{
            $this->session->set_flashdata('error','Error! Sorry unable to update');
            redirect('themes');
        }
    }


    public function content_publish($content_id){
        if(strlen($content_id) <= 0){ redirect('themes'); }
        $content_id = $content_id;
        $checkProduct = $this->crud->get_detail($content_id, "content_id", "igc_content");
        if(count($checkProduct) > 0){
            $update['updated'] = date('Y-m-d h:i:s');
            $update['publish_status'] = "1";

            $this->crud->move_to_trash($content_id,"content_id", $update, "igc_content");
            $this->session->set_flashdata('success','Successfully Updated.');
            redirect('themes');
        }else{
            $this->session->set_flashdata('error','Error! Sorry unable to update');
            redirect('themes');
        }
    }

    public function content_draft($content_id){
        if(strlen($content_id) <= 0){ redirect('themes'); }
        $content_id = $content_id;
        $checkProduct = $this->crud->get_detail($content_id, "content_id", "igc_content");
        if(count($checkProduct) > 0){
            $update['updated'] = date('Y-m-d h:i:s');
            $update['publish_status'] = "0";

            $this->crud->move_to_trash($content_id,"content_id", $update, "igc_content");
            $this->session->set_flashdata('success','Successfully updated.');
            redirect('themes');
        }else{
            $this->session->set_flashdata('error','Error! Sorry unable to update');
            redirect('themes');
        }
    }






    public function list_photos($id){
        $data['records'] = $this->crud->get_detail_rows($id, 'content_id', 'content_photos');
        $data['service_id'] = $id;
        $data['title']= "List Extra Photos";
        $this->load->view('header', $data);
        $this->load->view('list_photos');
        $this->load->view('footer');
    }
    
    public function add_photo($id = 0){
        
        if($this->input->post()){
            
            $insert['title'] = $this->input->post('title');
            $insert['title_ar'] = $this->input->post('title_ar');
            $insert['description'] = $this->input->post('description');
            $insert['description_ar'] = $this->input->post('description_ar');
            
            if(strlen($_FILES['image']['name']) > 0){
                $extension = strtolower(pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION));
                $allowed_type = array('jpg','jpeg','png','gif','bmp');
                if(in_array($extension,$allowed_type)){
                    $folderPath = "../uploads/service_image/";
                    $imageName = time()."_".rand(1111,9999)."_photo.".$extension;
                    move_uploaded_file($_FILES['image']['tmp_name'],$folderPath.$imageName);
                    $insert['image'] = $imageName;
                }else{
                    $this->session->set_flashdata('error','Image Type Support Only');
                    redirect('themes/list_photos/'.$this->input->post('content_id')); 
                }
            }else{
                if($id > 0){
                    $insert['image'] = $_POST['image_img'];
                }else{
                    $insert['image'] = "";
                }
            }
            
            if($id == null || $id <= 0){
                //Insert Here
                $insert['content_id'] = $this->input->post('content_id');
                $insert['added_date'] = date('Y-m-d h:i:s');
                $insert['added_by'] = "admin";
                $this->crud->insert($insert, "content_photos");
            }else{
                //Update Here
                $insert['edit_date'] = date('Y-m-d h:i:s');
                $insert['edit_by'] = "admin";
                $this->crud->update($id, "id", $insert, "content_photos");
            }
            
            $this->session->set_flashdata('success','Success');
            redirect('themes/list_photos/'.$this->input->post('content_id')); 
            
        }else{
            $this->session->set_flashdata('error','Error');
            redirect('themes');
        }
        
    }
    
    public function delete_photo($id){
        
        $delete = $this->crud->delete($id, "id", "content_photos");
        if($delete){
            $this->session->set_flashdata('success','Success');
            redirect('themes/list_photos/'.$this->input->post('content_id')); 
        }else{
            $this->session->set_flashdata('error','Error');
            redirect('themes/list_photos/'.$this->input->post('content_id')); 
        }
        
    }
    
    public function list_products($id){
        $data['records'] = $this->crud->get_detail_rows($id, 'content_id', 'content_photos');
        $data['service_id'] = $id;
        $data['title']= "List Extra Photos";
        $this->load->view('header', $data);
        $this->load->view('list_products');
        $this->load->view('footer');
    }









    public function check_name_exist($str, $content_id)
    {
        $string = str_replace(" ","-",$str);
        $name = $this->content->check_name_exist($string, $content_id);
        
        if(empty($name))
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_name_exist', 'title already exist.');
            return FALSE;
        }

    }



    public function comment($id)
    {
        $detail= $this->crud->get_detail($id, 'content_id', 'igc_content');
        if($detail['content_type']=="Page")
        {
            redirect('themes');
        }
        $data['page_title'] = $detail['content_page_title'];
        $data['records'] = $this->crud->get_detail_rows($id, 'content_id', 'igc_content_comments');
        $data['title']= "Publish/UnPublish Comment";
        $this->load->view('header', $data);
        $this->load->view('comment_list');
        $this->load->view('footer');
    }

    public function comment_active()
    {
        if($this->input->post())
        {
            $id = $this->input->post('id');
            $update['approved_status']="1";
            $this->crud->update($id, 'comment_id', $update, 'igc_content_comments');
            //code to create log
            $log['module_title']= "Content Comment Id"."(".$id.")";
            $log['action_id']= "2";
            $this->create_log($log);
            echo "success";
        }
    }

    public function comment_inactive()
    {
        if($this->input->post())
        {
            $id = $this->input->post('id');
            $update['approved_status']="0";
            $this->crud->update($id, 'comment_id', $update, 'igc_content_comments');
            //code to create log
            $log['module_title']= "Content Comment Id"."(".$id.")";
            $log['action_id']= "2";
            $this->create_log($log);
            echo "success";
        }
    }

    //comment delete

    public function comment_delete($id)
    {
        $result = $this->crud->delete($id,'comment_id','igc_content_comments');
        if($result)
        {
            //code to create log
            $log['module_title']= "Content Comment Id"."(".$id.")";
            $log['action_id']= "3";
            $this->create_log($log);

            $this->session->set_flashdata('success','Comment has been deleted.');
            redirect('themes');
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the Comment.');
            redirect('themes');
        }
    }




    //code to soft delete the content

    public function delete($content_id)
    {
        $content_detail = $this->crud->get_detail($content_id, 'content_id', 'igc_content');
        $result = $this->content->delete_content($content_id);
        if($result)
        {
            //code to create log
            $log['module_title']= $content_detail['content_page_title'];
            $log['action_id']= "3";
            $this->create_log($log);

            $path='../uploads/content/';
            @unlink($path.$content_detail['featured_img']);
            $this->session->set_flashdata('success','Content has been deleted.');
            redirect('themes');
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the content.');
            redirect('themes');
        }
    }



//code to add new tags in content

    public function add_tags($content_id, $tags)
    {
        if ($tags != '') {
            $tagIn = trim(preg_replace('/\s+/', ',', $tags));
            $tags = explode(',', $tagIn);

            $this->content->insert_tags($tags, $content_id);
        }

    }

    public function rmv_content_tag()
    {
        if($this->input->post())
        {
            $term_id = $this->input->post('term_id');
            $content_id = $this->input->post('content_id');

            $this->db->where('content_id', $content_id);
            $this->db->where('term_id', $term_id);
            $this->db->delete('igc_content_tags');

            echo "success";


        }
    }


    public function send($content_id)
    {
        $content_detail = $this->crud->get_detail($content_id, 'content_id', 'igc_content');
        $subscribes = $this->content->get_subscribers();
        if(! empty($content_detail) && $content_detail['content_type'] == 'Article' && ! empty($subscribes))
        {
            $site_settings = $this->site_settings->get_site_settings();
            $server_url = $site_settings['site_url'].'/index.php/themes/detail/'.$content_detail['content_url'];
            $server = $this->server->active_mail_server();

            $password = $this->encrypt->decode($server['password']);



            $this->load->library('mailer');

            $mail  = new PHPMailer();


            $body = '<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>'.$site_settings['site_name'].' Article</title>
</head>

<body>
<div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
    <div style="margin:0 0 10px"> <img alt="SansuiTrek" src="http://sansuitrek.com/templates/gk_music/images/logo.png"> </div>
    <p>Dear Subscribers</p>

    <table width="100%" cellspacing="0" cellpadding="5" border="0">

        <tbody>
        <tr>
           <p> Our new article has been published.
          In order to read the article please click the article Link. '.'<a href="'.$server_url.'">'.$server_url.'</a>'.'</p>
        </tr>


        <tr>
            <td colspan="2" style="background:#EEE; text-align:left;">Thanks and Regards,<br />
                SunsuiTrek<br />
                Tel:<strong>+977-1-4414739 / 4005043/44</strong><br />
                <a href="http://sansuitrek.com/" target="_blank" style="color:#46216F; text-decoration:underline;">www.sansuitrek.com</a></td>
        </tr>
        <tr>
            <td colspan="2" style="background:#EEE; text-align:left;"><br />
                IGC Technology<br />
                Tel:<strong>+977-01-4005043/4005044</strong><br />
                <a href="http://igctech.com.np/" target="_blank" style="color:#46216F; text-decoration:underline;">www.igctech.com.np</a></td>
        </tr>


        </tbody>
    </table>
</div>
</body>
</html>' ;

            if($server['smtp_connect'] == "true")
            {
                $mail->IsSMTP(); // telling the class to use SMTP
            }

            $mail->SMTPAuth   = true;                  // enable SMTP authentication

            $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

            $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

            $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

            $mail->Username   = $server['username'];  // GMAIL username

            $mail->Password   = $password;          // GMAIL password

            $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

            $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

            $mail->Subject    = $site_settings['site_name']." themesletter";


            $mail->MsgHTML($body);

            foreach($subscribes as $rows)
            {
                $mail->AddAddress($rows['email'], $site_settings['site_name']);
            }



            if(!$mail->Send())
            {
                $this->session->set_flashdata('error', 'Unable to Send the Email.Please Check Your Internet Connection.');
                redirect('themes');

            }
            else{
                $this->session->set_flashdata('success', 'themesLetter has been Send.');
                redirect('themes');
            }

        }
        else{
            $this->session->set_flashdata('error', 'Unable to Send the themesletter');
            redirect('themes');
        }

    }

    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "Content";
        $this->db->insert('igc_user_logs', $insert);
    }


}