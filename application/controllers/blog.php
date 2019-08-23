<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('crud_model', 'crud');
        $this->load->model('content_model','content');


    }


    public function index($page=0)
    {
        if($page < 1) {
            $page = 1;
        }
        $per_page = 5;
        $startpoint = ($page * $per_page) - $per_page;
        $data['blogs']= $this->content->get_blogs($startpoint, $per_page);
        $data['total'] = $this->content->count_blogs();
        $data['per_page'] = $per_page;
        $data['base_url'] = site_url('blog/index/');
        $data['current_page'] = $page;
        $data['menu'] = '';
        $this->load->view('header', $data);

        $this->load->view('blog/blog_list');
        $this->load->view('footer');
    }

    public function detail($slug)
    {
        $this->load->library('form_validation');
        if($this->input->post())
        {
            if($this->input->post())
            {

                $this->form_validation->set_rules('message', 'message', 'trim|required');
                $this->form_validation->set_rules('content_id', 'content_id', 'required');
//                $this->form_validation->set_rules('customer_id', 'customer_id', 'required');

                if($this->form_validation->run())
                {


                    $insert['message'] = $this->input->post('message');
                    $insert['content_id'] = $this->input->post('content_id');
//                    $insert['customer_id'] = $this->input->post('customer_id');
                    $insert['comment_date'] = date('Y-m-d:H:i:s');
//                    $insert['publish_status'] = "0";
                    $result = $this->crud->insert($insert,'igc_content_comments');
                    if($result)
                    {
                        $data['success']= "Your message has been send successfully.";
                    }
                    else{
                        $data['error']= "Unable to send the message.";
                    }

                }



            }
        }




        $detail= $this->content->get_page_detail($slug);
        $data['latest'] = $this->content->get_active_latest('igc_content');
        $data['content'] = $detail;
        $data['menu'] = '';
        $data['sub_title'] = $detail['content_page_title']." "."-"." ";
        $data['meta_title'] = $detail['meta_description'];
        $data['meta_description'] = $detail['meta_description'];
        $data['meta_keywords'] = $detail['meta_keywords'];
        //setting for fb share
        $data['og_url']= 'blog/detail/'.$detail['content_url'];
        $data['og_title']= $detail['content_page_title'];
        $data['og_description']= substr($detail['content_body'],0,200);
        $data['og_image']= 'uploads/content/'.$detail['featured_img'];
        $data['sub_title']= $detail['content_page_title'];
        $this->load->view('header', $data);

        $this->load->view('blog/blog_detail');
        $this->load->view('footer');
    }

}